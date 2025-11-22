<?php

include 'connect.php';

$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id='$id'";
$delete = mysqli_query($connect, $query);

if ($delete) {
    echo "<script>
            alert('Data berhasil dihapus'); window.location.href='index.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus'); window.location.href='index.php';
            </script>";
}
