<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <div class="container">
        <h1 class="text-center">Input Data</h1>
        <form action="proses_tambah_data.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" name="jumlah">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Area Warehouse</label>
                <input type="text" class="form-control" name="area">
            </div>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
        </form>
    </div>
</body>

</html>