<?php

include 'connect.php';

$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$area = $_POST['area'];

$id = $_POST['id'];

$query = "UPDATE list SET nama_barang='$nama', jumlah='$jumlah', area='$area' WHERE id='$id'";
$update = mysqli_query($connect, $query);

if ($update) {
    echo "<script>
            alert('Data berhasil diubah'); window.location.href='index.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal diubah'); window.location.href='edit_data.php?id=$id';
            </script>";
}
