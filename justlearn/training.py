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

# Download NLTK data
nltk.download('punkt')
nltk.download('wordnet')
nltk.download('stopwords')

# === Pre-define necessary variables ===
messages = ['How can I help you?', 'Can you provide more information?', 'Thank you for your message.']
stop_words = set(stopwords.words('english'))
lemmatizer = WordNetLemmatizer()

# Load the chat logs
chat_logs = []
with open('chat_log.txt', 'r') as f:
    for line in f:
        line = line.strip().lower()
        if line:
            chat_logs.append(line)

# === Preprocessing ===

# Tokenize and preprocess the chat messages
tokenized_messages = []
for message in messages:
    tokens = word_tokenize(message.lower())
    tokens = [lemmatizer.lemmatize(token) for token in tokens if token not in stop_words]
    tokenized_messages.append(' '.join(tokens))

# Tokenize and preprocess chat logs
tokenized_logs = []
for log in chat_logs:
    tokens = word_tokenize(log)
    tokens = [lemmatizer.lemmatize(token) for token in tokens if token not in stop_words]
    tokenized_logs.append(' '.join(tokens))

# Fit tokenizer after preprocessing
tokenizer = Tokenizer()
tokenizer.fit_on_texts(tokenized_logs + tokenized_messages)

# Convert tokenized logs to sequences
sequences = tokenizer.texts_to_sequences(tokenized_logs)
max_len = max([len(seq) for seq in sequences]) if sequences else 1

# Pad sequences to ensure each sequence has the same length
padded_sequences = pad_sequences(sequences, maxlen=max_len, padding='post')

# === Define Chatbot Environment ===
class ChatbotEnv(gym.Env):
    metadata = {'render.modes': ['human']}

    def __init__(self, messages):
        self.action_space = gym.spaces.Discrete(2)  # Two possible actions
        self.observation_space = gym.spaces.Box(
            low=0,
            high=max(tokenizer.word_index.values()) + 1,
            shape=(max_len,),
            dtype=np.int32
        )
        self.messages = messages
        self.state = None

    def step(self, user_input):
        input_lower = user_input.lower()
        if "hello" in input_lower:
            response = "Hello! How can I help you today?"
            reward = 1
        elif "what are you" in input_lower:
            response = "I'm a learning chatbot, still under training."
            reward = 1
        else:
            response = "I'm not sure I understand. Could you rephrase?"
            reward = 0
        done = False
        return self.state, reward, done, False, {'response': response}


    def reset(self):
        dummy_text = "hello"
        tokens = [lemmatizer.lemmatize(token) for token in word_tokenize(dummy_text.lower()) if token not in stop_words]
        tokenized = ' '.join(tokens)
        sequence = tokenizer.texts_to_sequences([tokenized])
        self.state = pad_sequences(sequence, maxlen=max_len, padding='post')[0]
        return self.state

# === Define Agent ===
class ChatbotAgent:
    def __init__(self, env, tokenizer):
        self.env = env
        self.tokenizer = tokenizer
        self.model = keras.Sequential([
            layers.Input(shape=(env.observation_space.shape[0],)),
            layers.Dense(16, activation='relu'),
            layers.Dense(env.action_space.n, activation='softmax')
        ])
        self.model.compile(optimizer='adam', loss='categorical_crossentropy', metrics=['accuracy'])

    def train(self, episodes=1000):
        for _ in range(episodes):
            state = self.env.reset()
            done = False
            while not done:
                state_input = np.array(state).reshape(1, -1)
                action_probs = self.model.predict(state_input, verbose=0)[0]
                action = np.argmax(action_probs)
                next_state, reward, done, _, info = self.env.step(action)
                self.model.fit(state_input, keras.utils.to_categorical([action], num_classes=2), epochs=1, verbose=0)
                state = next_state

    def act(self, state, *_):
        state_input = np.array(state).reshape(1, -1)
        action_probs = self.model.predict(state_input, verbose=0)[0]
        return np.argmax(action_probs)

# === Initialize environment and agent ===
env = ChatbotEnv(tokenized_messages)
agent = ChatbotAgent(env, tokenizer)

# === Train agent ===
agent.train(episodes=1000)

# === Chat loop ===
while True:
    user_input1 = input("User: ")
    tokens = word_tokenize(user_input1.lower())
    tokens = [lemmatizer.lemmatize(token) for token in tokens if token not in stop_words]
    tokenized_input = ' '.join(tokens)
    sequence = tokenizer.texts_to_sequences([tokenized_input])
    padded_sequence = pad_sequences(sequence, maxlen=max_len, padding='post')
    action = agent.act(padded_sequence[0])
    _, _, _, _, info = env.step(action)
    print("Bot:", info['response'])
