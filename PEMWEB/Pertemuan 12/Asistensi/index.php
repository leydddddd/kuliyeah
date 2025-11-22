<?php
include 'connect.php';

if (isset($_POST['search']) && $_POST['search'] != '') {
    $search = mysqli_real_escape_string($connect, $_POST['search']);
    $query = "SELECT * FROM list WHERE nama_barang LIKE '%$search%' OR area LIKE '%$search%'";
} else {
    $query = "SELECT * FROM list";
}

$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Tabel Daftar Barang Warehouse</h2>
        <br>

        <form action="index.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search by name or area">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-secondary me-3">Search</button>
                <a href="index.php" class="btn btn-outline-danger">Kembali</a>
            </div>
            <div class="mb-3">

            </div>
        </form>

        <div class="mb-3">
            <a href="index.php?sort=asc" class="btn btn-outline-secondary me-3">Sort Ascending</a>
            <a href="index.php?sort=desc" class="btn btn-outline-secondary">Sort Descending</a>

        </div>

        <?php
        if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
            if ($sort == 'asc') {
                $query .= " ORDER BY area ASC";
            } elseif ($sort == 'desc') {
                $query .= " ORDER BY area DESC";
            }
        }
        $result = mysqli_query($connect, $query);
        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Area</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $numbre = 1;
                while ($data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $numbre++ . "</td>";
                    echo "<td>" . $data['nama_barang'] . "</td>";
                    echo "<td>" . $data['jumlah'] . "</td>";
                    echo "<td>" . $data['area'] . "</td>";
                    echo "<td> 
                        <a href='edit_data.php?id={$data['id']}' class='btn btn-secondary'>Edit</a> 
                        <a href='proses_delete_data.php?id={$data['id']}' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="tambah_data.php"><button class="btn btn-outline-secondary">Input Data</button></a>
    </div>
    <br>
</body>

</html>