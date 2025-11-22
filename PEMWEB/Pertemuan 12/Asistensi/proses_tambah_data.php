<?php

include 'connect.php';

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$area = $_POST['area'];

$query = "INSERT INTO list (nama_barang, jumlah, area) VALUES ('$nama', '$jumlah', '$area')";
$insert = mysqli_query($connect, $query);

if ($insert) {
    echo "<script>
            alert('Data berhasil ditambahkan'); window.location.href='index.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal ditambahkan'); window.location.href='tambah_data.php';
            </script>";
}
