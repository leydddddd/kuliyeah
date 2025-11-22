<?php

include 'connect.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nilai = $_POST['nilai'];

$query = "INSERT INTO mahasiswa (nama, nim, nilai) VALUES ('$nama', '$nim', '$nilai')";
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
