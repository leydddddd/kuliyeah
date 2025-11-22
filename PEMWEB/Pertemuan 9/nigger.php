<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="]" cellpadding="5">
        <tr>
            <th>NAMA</th>
            <th>NIM</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
        <tr>
            <td><?php echo $nama ?></td>
            <td><?php echo $nim ?></td>
            <td><?php echo $kelas ?></td>
            <td><a href="edit.php?nama=<?= $nama?>&nim=<?= $nim?>&kelas=<?= $kelas?>">EDIT</a></td>
        </tr>
    </table>
</body>
</html>