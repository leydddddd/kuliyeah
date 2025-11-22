import cv2
import os

def extract_frames(video_path, output_dir="frames", frame_rate=1):
    """
    Extracts frames from a video file at a specified rate and saves them as images.

    Args:
        video_path (str): The path to the input video file.
        output_dir (str): The directory where the extracted frames will be saved.
        frame_rate (int): Extract one frame every 'frame_rate' frames.
                          (e.g., 1 extracts every frame, 30 extracts 1 frame per second 
                          if the video is 30 FPS).
    """
    
    # 1. Create the output directory if it doesn't exist
    if not os.path.exists(output_dir):
        os.makedirs(output_dir)

    # 2. Open the video file
    # 'cv2.VideoCapture' is the main object for working with videos
    video_capture = cv2.VideoCapture(video_path)
    
    # Check if the video opened successfully
    if not video_capture.isOpened():
        print(f"❌ Error: Could not open video file: {video_path}")
        return

    # Get the frame rate of the video (optional, but useful)
    fps = video_capture.get(cv2.CAP_PROP_FPS)
    print(f"Video FPS: {fps:.2f}")

    frame_count = 0
    saved_count = 0

    print("--- Starting Frame Extraction ---")

    while True:
        # 3. Read the next frame
        # 'success' is a boolean, 'frame' is the image data (NumPy array)
        success, frame = video_capture.read()

        # If there are no more frames, break the loop
        if not success:
            break

        # 4. Check the frame rate and save the frame
        if frame_count % frame_rate == 0:
            # Create the output filename
            frame_filename = os.path.join(output_dir, f"frame_{saved_count:06d}.jpg")
            
            # Save the frame as a JPEG image
            cv2.imwrite(frame_filename, frame)
            
            saved_count += 1
            if saved_count % 100 == 0:
                 print(f"Extracted {saved_count} frames...")

        frame_count += 1

    # 5. Release the video capture object and clean up
    video_capture.release()
    print("--- Frame Extraction Complete ---")
    print(f"✅ Total frames processed: {frame_count}")
    print(f"✅ Total frames saved: {saved_count}")


if __name__ == "__main__":
    # --- CONFIGURATION ---
    # 1. Update this to the path of your video file
    VIDEO_FILE = "input2.mp4" 
    
    # 2. Update this to the desired output folder name
    OUTPUT_FOLDER = "frames" 
    
    # 3. Adjust this to control how many frames are saved
    # - A value of 1 saves EVERY frame.
    # - A value of 30 saves roughly 1 frame per second (if video is 30 FPS).
    # - A higher value saves fewer frames.
    FRAME_SKIP = 30
    # ---------------------

    # ! IMPORTANT: Make sure to replace "my_video.mp4" with your actual file path !
    extract_frames(VIDEO_FILE, OUTPUT_FOLDER, FRAME_SKIP)