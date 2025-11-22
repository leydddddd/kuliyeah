<?php
    $nama = $_GET['nama'];
    $nim = $_GET['nim'];
    $kelas = $_GET['kelas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nigger.php" method="POST">
        <label for="nama">Name</label><br>
        <input type="text" id="nama" name="nama" value="<?= $nama ?>"><br><br>
        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim" value="<?= $nim ?>"><br><br>
        <label for="kelas">Kelas</label><br>
        <input type="text" id="kelas" name="kelas" value="<?= $kelas ?>"><br><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>
</body>
</html>