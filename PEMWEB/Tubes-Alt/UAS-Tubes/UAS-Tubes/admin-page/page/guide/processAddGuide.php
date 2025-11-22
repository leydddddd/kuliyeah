<?php

include '../../connection.php';

$guideTitle = mysqli_real_escape_string($connect, $_POST['title']);
$guideContent1 = mysqli_real_escape_string($connect, $_POST['firstCon']);
$guideContent2 = mysqli_real_escape_string($connect, $_POST['secondCon']);
$guideSource = mysqli_real_escape_string($connect, $_POST['source']);
$guideLabel = mysqli_real_escape_string($connect, $_POST['agency']);

$guideImage = $_FILES['image']['name'];
$guideImageTmp = $_FILES['image']['tmp_name'];
$guideDate = date('Y-m-d H:i:s');

$uploadDir = '../../../Img-panduan';
$thumbnailDir = '../../../Img-panduan/thumbnails/';

// Ensure the uploads directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$targetFile = $uploadDir . basename($guideImage);

//Ensure the file size is less than 2MB
if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
    echo "<script>
            alert('Ukuran file gambar harus kurang dari 2MB'); window.location.href='addGuidePost.php';
          </script>";
    exit;
}

//Create a thumbnail of the image regardless of their resolution and original size
$thumbnailFile = $thumbnailDir . 'thumb_' . basename($guideImage);
if (!is_dir($thumbnailDir)) {
    mkdir($thumbnailDir, 0755, true);
}
// Create a thumbnail by cropping and resizing to fit 180x90 frame using GD
try {
    $thumbWidth = 180;
    $thumbHeight = 90;

    $imageInfo = getimagesize($guideImageTmp);
    $srcType = $imageInfo[2];

    switch ($srcType) {
        case IMAGETYPE_JPEG:
            $srcImage = imagecreatefromjpeg($guideImageTmp);
            break;
        case IMAGETYPE_PNG:
            $srcImage = imagecreatefrompng($guideImageTmp);
            break;
        case IMAGETYPE_GIF:
            $srcImage = imagecreatefromgif($guideImageTmp);
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

if (move_uploaded_file($guideImageTmp, $targetFile)) {
    $query = "INSERT INTO guide (title, content, content2, image, date, source, label) VALUES ('$guideTitle', '$guideContent1', '$guideContent2', '$guideImage', '$guideDate', '$guideSource', '$guideLabel')";
    $insert = mysqli_query($connect, $query);

    if ($insert) {
        echo "<script>
            alert('Berita berhasil ditambahkan'); window.location.href='../../dashboard.php';
          </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan berita'); window.location.href='addGuidePost.php';
          </script>";
    }
} else {
    echo "<script>
        alert('Gagal mengunggah gambar'); window.location.href='addGuidePost.php';
      </script>";
}
