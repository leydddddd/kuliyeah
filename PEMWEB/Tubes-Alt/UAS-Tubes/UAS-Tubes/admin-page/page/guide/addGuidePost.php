<?php

include '../../connection.php';

$agencyOptions = '';
$agency = isset($_POST['agency']) ? $_POST['agency'] : ''; // or $_GET['agency'] if using GET
$sql = "SELECT agency FROM number";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $agencyValue = $row['agency'];
        $selected = ($agencyValue === $agency) ? 'selected' : '';
        $agencyOptions .= '<option value="' . htmlspecialchars($agencyValue) . '" ' . $selected . '>' . htmlspecialchars($agencyValue) . '</option>';
    }
} else {
    $agencyOptions = '<option value="">Tidak ada agensi tersedia</option>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Postingan Baru</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
        crossorigin="anonymous" />

</head>

<body>
    <!-- JS Bootstrap -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <!-- Content -->
    <section class="content">
        <div class="container mt-5 bg-light p-5 rounded shadow-lg">
            <h1>Buat Postingan Baru</h1>
            <form action="processAddGuide.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten 1 atau Step</label>
                    <textarea class="form-control" id="content" name="firstCon" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten 2 atau Deskripsi</label>
                    <textarea class="form-control" id="content" name="secondCon" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Cover Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Sumber</label>
                    <input type="text" class="form-control" id="title" name="source" required>
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