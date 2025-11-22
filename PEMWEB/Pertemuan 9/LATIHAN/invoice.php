<?php
    $NAMA = $_POST['nama'];
    $EMAIL = $_POST['email'];
    $ALAMAT = $_POST['alamat'];
    $PROCESSOR = $_POST['processor'];
    $RAM = $_POST['ram'];
    $STORAGE = $_POST['storage'];
    $VGA = $_POST['vga'];
    $PSU = $_POST['psu'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LATIHAN P9</title>
    <link rel=stylesheet href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Header, Form and Content -->
    <div class="container-fluid text-danger-emphasis" id="header">
        <form action="invoice.php" method="POST">
            <h1 class="text-start" id="head-text">Invoice - Skizo Komputer</h1>
            <p>Menyediakan layanan servis komputer, pembelian dan pre-order komponen komputer</p>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="namaInputForm1" class="col-form-label">Nama</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" id="namaInputForm1" placeholder="<?= $NAMA?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="emailInputForm1" class="col-form-label">Email</label>
            </div>
                <div class="col-10">
                    <input type="email" class="form-control" id="emailInputForm1" placeholder="<?= $EMAIL?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="alamatInputForm1" class="col-form-label">Alamat</label>
                </div>
                <div class="col-10">
                    <textarea class="form-control" id="alamatInputForm1" rows="3" placeholder="<?= $ALAMAT?>" disabled></textarea>
                </div>
            </div>
            <h3 class="text-start" id="head-text">Perangkat Komputer</h3>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="processor" class="col-form-label">Processor</label>
                </div>
                <div class="col-10">
                    <label for="processor" class="col-form-label"><?= $PROCESSOR?></label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="ram" class="col-form-label">RAM</label>
                </div>
                <div class="col-10">
                    <label for="processor" class="col-form-label"><?= $RAM?></label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="storage" class="col-form-label">Storage</label>
                </div>
                <div class="col-10">
                    <label for="processor" class="col-form-label"><?= $STORAGE?></label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="vga" class="col-form-label">VGA</label>
                </div>
                <div class="col-10">
                    <label for="processor" class="col-form-label"><?= $VGA?></label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="psu" class="col-form-label">PSU</label>
                </div>
                <div class="col-10">
                    <label for="processor" class="col-form-label"><?= $PSU?></label>
                </div>
            </div>
            <a class="btn btn-outline-secondary mb-4" href="edit.php?nama=<?= $NAMA?>&email=<?= $EMAIL?>&alamat=<?= $ALAMAT?>&processor=<?= $PROCESSOR?>&ram=<?= $RAM?>&storage=<?= $STORAGE?>&vga=<?= $VGA?>&psu=<?= $PSU?>" role="button">Kembali Edit</a>
        </form>
    </div>
</body>
</html>