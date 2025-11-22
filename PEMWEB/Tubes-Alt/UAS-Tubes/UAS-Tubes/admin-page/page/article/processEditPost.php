<?php
include '../../connection.php';

$id = $_POST['id'];
$title = mysqli_real_escape_string($connect, $_POST['title']);
$content = mysqli_real_escape_string($connect, $_POST['content']);

$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

$uploadDir = '../../../Img-artikel';
$thumbnailDir = '../../../Img-artikel/thumbnails/';

// Ensure the uploads directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Ensure the thumbnails directory exists
if (!is_dir($thumbnailDir)) {
    mkdir($thumbnailDir, 0755, true);
}

$targetFile = $uploadDir . basename($image);
$thumbnailFile = $thumbnailDir . 'thumb_' . basename($image);

// Debugging output (optional, remove in production)
// var_dump($title, $content, $image, $targetFile);

if (empty($title) || empty($content) || empty($image)) {
    echo "<script>
            alert('Semua field harus diisi'); window.location.href='edit-post.php?id=$id';
          </script>";
    exit;
}

// Ensure the file size is less than 2MB
if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
    echo "<script>
            alert('Ukuran file gambar harus kurang dari 2MB'); window.location.href='edit-post.php?id=$id';
          </script>";
    exit;
}

// Create a thumbnail of the image regardless of their resolution and original size
try {
    $thumbWidth = 180;
    $thumbHeight = 90;

    $imageInfo = getimagesize($image_tmp);
    $srcType = $imageInfo[2];

    switch ($srcType) {
        case IMAGETYPE_JPEG:
            $srcImage = imagecreatefromjpeg($image_tmp);
            break;
        case IMAGETYPE_PNG:
            $srcImage = imagecreatefrompng($image_tmp);
            break;
        case IMAGETYPE_GIF:
            $srcImage = imagecreatefromgif($image_tmp);
            break;
        default:
            throw new Exception('Unsupported image type');
    }

    $srcWidth = imagesx($srcImage);
    $srcHeight = imagesy($srcImage);

    // Calculate aspect ratios
    $srcRatio = $srcWidth / $srcHeight;
    $thumbRatio = $thumbWidth / $thumbHeight;

    // Determine cropping area to fit the frame
    if ($srcRatio > $thumbRatio) {
        // Source is wider than thumbnail ratio
        $newHeight = $srcHeight;
        $newWidth = intval($srcHeight * $thumbRatio);
        $srcX = intval(($srcWidth - $newWidth) / 2);
        $srcY = 0;
    } else {
        // Source is taller or equal to thumbnail ratio
        $newWidth = $srcWidth;
        $newHeight = intval($srcWidth / $thumbRatio);
        $srcX = 0;
        $srcY = intval(($srcHeight - $newHeight) / 2);
    }

    $thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);

    // For PNG/GIF, preserve transparency
    if ($srcType == IMAGETYPE_PNG || $srcType == IMAGETYPE_GIF) {
        imagecolortransparent($thumbImage, imagecolorallocatealpha($thumbImage, 0, 0, 0, 127));
        imagealphablending($thumbImage, false);
        imagesavealpha($thumbImage, true);
    }

    imagecopyresampled(
        $thumbImage,
        $srcImage,
        0,
        0, // dst_x, dst_y
        $srcX,
        $srcY, // src_x, src_y
        $thumbWidth,
        $thumbHeight, // dst_w, dst_h
        $newWidth,
        $newHeight // src_w, src_h
    );

    // Save thumbnail as JPEG
    imagejpeg($thumbImage, $thumbnailFile, 90);

    // Free memory
    imagedestroy($srcImage);
    imagedestroy($thumbImage);
} catch (Exception $e) {
    error_log('Thumbnail error: ' . $e->getMessage());
}

// Move uploaded file and update database
if (move_uploaded_file($image_tmp, $targetFile)) {
    $date = date('Y-m-d H:i:s');
    $query = "UPDATE news SET title='$title', content='$content', image='$image', date='$date' WHERE id='$id'";
    $update = mysqli_query($connect, $query);

    if ($update) {
        echo "<script>
                alert('Berita berhasil diupdate'); window.location.href='../../dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal mengupdate berita'); window.location.href='edit-post.php?id=$id';
              </script>";
    }
} else {
    echo "<script>
            alert('Gagal mengunggah gambar'); window.location.href='edit-post.php?id=$id';
          </script>";
}
