<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <div class="container">
        <h2 class="text-center">Tabel Daftar Nilai Mahasigma</h2>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai</th>
            </tr>
            <?php
            include 'connect.php';

            $query = "SELECT * FROM mahasiswa";
            $result = mysqli_query($connect, $query);
            $numbre = 1;

            while ($data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $numbre++ . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['nim'] . "</td>";
                echo "<td>" . $data['nilai'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <a href="tambah_data.php"><button class="btn btn-outline-secondary">Input Data</button></a>
    </div>
</body>

</html>