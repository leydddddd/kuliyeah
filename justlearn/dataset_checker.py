from ultralytics import YOLO

# Load the base model weights
model = YOLO("yolov8m.pt") 

data_yaml_path = '../Miscellaneous/dataset_sca/data.yaml'

# Use the .val() method, which automatically loads and validates the dataset
# It will print the class distribution, including the counts of all 4 classes.
# Note: You can skip training and validation steps by setting a low 'epochs' or using val()
# to check the data structure before training.
model.val(data=data_yaml_path, plots=True)