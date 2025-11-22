<?php
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = '$id'";
$result = mysqli_query($connect, $query);

while ($data = mysqli_fetch_array($result)) {
    $nama = $data['nama'];
    $nim = $data['nim'];
    $nilai = $data['nilai'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <div class="container">
        <h1 class="text-center">Edit Data Mahasigma</h1>
        <form action="proses_edit_data.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $nim ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nilai</label>
                <input type="text" class="form-control" name="nilai" value="<?php echo $nilai ?>">
            </div>
            <input type='hidden' name='id' value='<?php echo $id ?>'>
            <button type="submit" class="btn btn-outline-secondary">Confirm</button>
        </form>
    </div>
</body>

</html>