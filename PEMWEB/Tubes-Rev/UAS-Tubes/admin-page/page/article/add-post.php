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
            <form action="processAddPost.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Cover Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-outline-secondary mt-2">Buat Postingan</button>
            </form>
        </div>
    </section>
</body>


</html>