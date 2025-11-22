from ultralytics import YOLO

# Load the base model weights
model = YOLO("yolov8n.pt") 

model.train(
    data='../Miscellaneous/dataset_sca1/data.yaml', # Correct argument for dataset path
    imgsz=512,
    epochs=100,
    batch=4,
    lr0=0.005,
    name='yolov8_custom_run3',
    device='cpu'
)

# NOTE: The 'train' method returns a Trainer object, not the detection boxes.
# It saves the trained model weights to the specified 'runs' folder.