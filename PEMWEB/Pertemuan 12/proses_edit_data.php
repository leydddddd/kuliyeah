<?php

include 'connect.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nilai = $_POST['nilai'];

$id = $_POST['id'];

$query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', nilai='$nilai' WHERE id='$id'";
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
