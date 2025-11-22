<?php

include '../../connection.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid post ID.");
}

$id = $_GET['id'];

// Use prepared statement to prevent SQL injection
$stmt = mysqli_prepare($connect, "SELECT * FROM guide WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result) {
    die("Query failed: " . mysqli_error($connect));
}

if ($data = mysqli_fetch_array($result)) {
    $title = $data['title'];
    $content = $data['content'];
    $content2 = $data['content2'];
    $source = $data['source'];
    $agency = $data['label'];
    $image = $data['image'];
} else {
    die("Post not found.");
}

$agencyOptions = '';
$sql = "SELECT agency FROM number";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $agencyValue = $row['agency'];
        $selected = ($agencyValue == $agency) ? 'selected' : '';
        $agencyOptions .= '<option value="' . htmlspecialchars($agencyValue) . '" ' . $selected . '>' . htmlspecialchars($agencyValue) . '</option>';
    }
} else {
    $agencyOptions = '<option value="">Tidak ada agensi tersedia</option>';
}

?>

<?php

//keamanan agar tidak bisa diakses sembarangan
session_start();
if (!isset($_SESSION['username']) || !$_SESSION['isLoggedIn']) {
    header("Location: ../index.php");
    exit();
}

include './connection.php';

$query = "SELECT * FROM news ORDER BY date DESC";
$result = mysqli_query($connect, $query);

$secQuery = "SELECT * FROM guide ORDER BY date DESC";
$hasil = mysqli_query($connect, $secQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Postingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <section class="content">
        <div class="container mt-5 bg-light p-5 rounded shadow-lg">
            <h1>Edit Postingan</h1>
            <form action="processEditGuide.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required value="<?= htmlspecialchars($title) ?>">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten 1 atau Step</label>
                    <textarea class="form-control" id="content" name="firstCon" rows="5" required><?= htmlspecialchars($content) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="content2" class="form-label">Konten 2 atau Deskripsi</label>
                    <textarea class="form-control" id="content2" name="secondCon" rows="5" required><?= htmlspecialchars($content2) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Cover Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="image" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="source" class="form-label">Sumber</label>
                    <input type="text" class="form-control" id="source" name="source" required value="<?= htmlspecialchars($source) ?>">
                </div>
                <div class="mb-3">
                    <label for="agency" class="form-label">Pilih Agensi</label>
                    <select class="form-select" id="agency" name="agency" required>
                        <option value="">Pilih Agensi</option>
                        <?= $agencyOptions ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-secondary mt-3">Update Postingan</button>
            </form>
        </div>
    </section>
</body>

</html>