import random
import numpy as np
import tensorflow as tf
from tensorflow import keras
from tensorflow.keras import layers
from tensorflow.keras.preprocessing.text import Tokenizer
from tensorflow.keras.preprocessing.sequence import pad_sequences
import nltk
from nltk.tokenize import word_tokenize
from nltk.stem import WordNetLemmatizer
from nltk.corpus import stopwords
import gymnasium as gym
import json

# === NLTK SETUP ===
nltk.download('punkt')
nltk.download('wordnet')
nltk.download('stopwords')

# === CONFIGURATION ===
stop_words = set(stopwords.words('english'))
lemmatizer = WordNetLemmatizer()

# Predefined responses
messages = ['How can I help you?', 'Can you provide more information?', 'Thank you for your message.']

# Load chat logs from file
chat_logs = []
try:
    with open('chat_log.txt', 'r') as f:
        chat_logs = [line.strip().lower() for line in f if line.strip()]
except FileNotFoundError:
    print("chat_log.txt not found, using dummy logs instead.")
    chat_logs = ["hello", "what is your name?", "thank you"]

# === TEXT PREPROCESSING ===
def preprocess(texts):
    result = []
    for text in texts:
        tokens = word_tokenize(text.lower())
        tokens = [lemmatizer.lemmatize(tok) for tok in tokens if tok not in stop_words]
        result.append(' '.join(tokens))
    return result

tokenized_messages = preprocess(messages)
tokenized_logs = preprocess(chat_logs)

# === TOKENIZATION ===
tokenizer = Tokenizer()
tokenizer.fit_on_texts(tokenized_logs + tokenized_messages)

sequences = tokenizer.texts_to_sequences(tokenized_logs)
max_len = max(len(seq) for seq in sequences) if sequences else 10
padded_sequences = pad_sequences(sequences, maxlen=max_len, padding='post')

# === ENVIRONMENT DEFINITION ===
class ChatbotEnv(gym.Env):
    metadata = {'render.modes': ['human']}

    def __init__(self, messages):
        self.messages = messages
        self.action_space = gym.spaces.Discrete(len(messages))
        self.observation_space = gym.spaces.Box(
            low=0,
            high=max(tokenizer.word_index.values()) + 1,
            shape=(max_len,),
            dtype=np.int32
        )
        self.state = None

    def step(self, action_obj):
        action_type = action_obj['type']  # 'RESPOND', 'ASK_clarify', etc.
        user_input = action_obj['input']

        if action_type == 'RESPOND':
            response = self.generate_response(user_input)
            reward = self.compute_reward(user_input, action_type, response)
        elif action_type == 'ASK_clarify':
            response = self.generate_clarifying_question(user_input)
            reward = 2
        elif action_type == 'ASK_self_check':
            response = self.self_reflection(user_input)
            reward = 2
        else:
            response = "I don't understand."
            reward = 0

        self.state = self.encode_text(user_input)
        done = False
        return self.state, reward, done, False, {'response': response}
    
    def generate_response(self, user_input):
        return "This is a response to: " + user_input

    def generate_clarifying_question(self, user_input):
        return "Could you clarify what you mean by: " + user_input + "?"

    def self_reflection(self, user_input):
        return "Let me reconsider what I said about: " + user_input

    def compute_reward(self, user_input, action, response):
        if action == "RESPOND" and "hello" in user_input.lower():
            return 1
        elif action == "RESPOND":
            return -1  # Treats uncertain or wrong response negatively
        elif action in ["ASK_clarify", "ASK_self_check"]:
            return 2  # These actions are rewarded to encourage safer fallback
        return 0

    def reset(self):
        dummy_text = "hello"
        tokens = [lemmatizer.lemmatize(tok) for tok in word_tokenize(dummy_text.lower()) if tok not in stop_words]
        sequence = tokenizer.texts_to_sequences([' '.join(tokens)])
        self.state = pad_sequences(sequence, maxlen=max_len, padding='post')[0]
        return self.state
    
    def encode_text(self, text):
        tokens = [lemmatizer.lemmatize(tok) for tok in word_tokenize(text.lower()) if tok not in stop_words]
        sequence = tokenizer.texts_to_sequences([' '.join(tokens)])
        return pad_sequences(sequence, maxlen=max_len, padding='post')[0]

# === AGENT DEFINITION ===
class ChatbotAgent:
    def __init__(self, env, max_len):
        self.env = env
        self.max_len = max_len
        self.memory = []
        self.model = keras.Sequential([
            layers.Input(shape=(env.observation_space.shape[0],)),
            layers.Dense(32, activation='relu'),
            layers.Dense(env.action_space.n, activation='softmax')
        ])
        self.model.compile(optimizer='adam', loss='categorical_crossentropy', metrics=['accuracy'])

    def train(self, episodes=500, training_data=[]):
        if training_data:
            print("Training using JSON data...")
            for item in training_data:
                text_state = item["state"]
                tokenized = tokenizer.texts_to_sequences([text_state])
                state = pad_sequences(tokenized, maxlen=self.max_len)  # ← converts to shape (1, maxlen)
                
                action_type = item["action"]
                reward = item["reward"]
                
                action = self.map_action_type_to_index(action_type)
                
                self.model.fit(state, keras.utils.to_categorical([action], num_classes=self.env.action_space.n),
                            epochs=1, verbose=0)
        else:
            print("Training using self-play...")
            for _ in range(episodes):
                state = self.env.reset()
                done = False
                while not done:
                    state_input = np.array(state).reshape(1, -1)
                    action_probs = self.model.predict(state_input, verbose=0)[0]
                    action = np.argmax(action_probs)

                    # Simulate user input as environment step expects natural input
                    simulated_input = self.env.messages[action]

                    if "?" in simulated_input:
                        action_type = "ASK_clarify"
                    elif "rethink" in simulated_input.lower():
                        action_type = "ASK_self_check"
                    else:
                        action_type = "RESPOND"

                    action_obj = {
                        'type': action_type,
                        'input': simulated_input
                    }

                    next_state, reward, done, _, info = self.env.step(action_obj)

                    self.memory.append({
                        'state': state,
                        'action': action_type,
                        'response': info['response'],
                        'reward': reward,
                        'next_state': next_state
                    })

                    self.model.fit(state_input, keras.utils.to_categorical([action], num_classes=self.env.action_space.n),
                                epochs=1, verbose=0)
                    state = next_state

    def act(self, state):
        state_input = np.array(state).reshape(1, -1)
        action_probs = self.model.predict(state_input, verbose=0)[0]
        return np.argmax(action_probs)
    
    def map_action_type_to_index(self, action_type):
        mapping = {
            "RESPOND": 0,
            "ASK_clarify": 1,
            "ASK_self_check": 2
        }
        return mapping.get(action_type, 0)  # fallback to RESPOND

# === LOAD TRAINING DATA ===
try:
    with open("training_data.json", "r") as f:
        training_data = json.load(f)
    print(f"Loaded {len(training_data)} training examples from training_data.json")
except FileNotFoundError:
    print("No training_data.json found. Training from scratch.")
    training_data = []

# === INITIALIZE & TRAIN ===
env = ChatbotEnv(messages)
agent = ChatbotAgent(env, max_len=max_len)

print("Training chatbot agent...")
agent.train(episodes=1000, training_data=training_data)
print("Training completed.")

# === INTERACTIVE CHAT LOOP ===
print("\nStart chatting with the bot! (type 'exit' to quit)")
while True:
    user_input = input("User: ")
    if user_input.strip().lower() == "exit":
        break

    # Preprocess user input
    tokens = [lemmatizer.lemmatize(tok) for tok in word_tokenize(user_input.lower()) if tok not in stop_words]
    sequence = tokenizer.texts_to_sequences([' '.join(tokens)])
    padded_sequence = pad_sequences(sequence, maxlen=max_len, padding='post')

    action = agent.act(padded_sequence[0])
    action_obj = {
    'type': 'RESPOND',  # or make it smarter later
    'input': user_input
    }
    _, _, _, _, info = env.step(action_obj)
    print("Bot:", info['response'])
