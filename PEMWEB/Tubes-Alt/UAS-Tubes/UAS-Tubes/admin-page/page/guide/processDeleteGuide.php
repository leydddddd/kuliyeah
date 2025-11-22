<?php

include '../../connection.php';

$id = intval($_GET['id']);
// Check if the ID is set and valid

if ($id > 0) {
  $query = "DELETE FROM guide WHERE id = $id";
  $result = mysqli_query($connect, $query);

  if ($result) {
    echo "<script>
                alert('Berita berhasil dihapus');
                window.location.href='../../dashboard.php';
              </script>";
  } else {
    echo "<script>
                alert('Gagal menghapus berita');
                window.location.href='../../dashboard.php';
              </script>";
  }
} else {
  echo "<script>
            alert('ID berita tidak valid');
            window.location.href='../../dashboard.php';
          </script>";
}
