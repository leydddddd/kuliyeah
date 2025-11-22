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
            <h1 class="text-start" id="head-text">Skizo Komputer</h1>
            <p>Menyediakan layanan servis komputer, pembelian da pre-order komponen komputer</p>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="namaInputForm1" class="col-form-label">Nama</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="emailInputForm1" class="col-form-label">Email</label>
            </div>
                <div class="col-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="alamatInputForm1" class="col-form-label">Alamat</label>
                </div>
                <div class="col-10">
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
            </div>
            <h3 class="text-start" id="head-text">Perangkat Komputer</h3>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="processor" class="col-form-label">Processor</label>
                </div>
                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="processor" value="Intel" id="checkIntel">
                        <label class="form-check-label" for="checkIntel">
                            Intel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="processor" value="AMD" id="checkAMD">
                        <label class="form-check-label" for="checkAMD">
                            AMD
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="ram" class="col-form-label">RAM</label>
                </div>
                <select class="form-select col-10" name="ram" id="ram">
                    <option selected value="">Pilih RAM</option>
                    <option value="4GB">4GB</option>
                    <option value="8GB">8GB</option>
                    <option value="16GB">16GB</option>
                </select>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="storage" class="col-form-label">Storage</label>
                </div>
                <div class="col-10">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="storage" value="SSD" id="checkSSD">
                            <label class="form-check-label" for="checkSSD">
                            Solid State Drive (SSD)
                            </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="storage" value="HDD" id="checkHDD">
                        <label class="form-check-label" for="checkHDD">
                            Hard Disk Drive (HDD)
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="vga" class="col-form-label">VGA</label>
                </div>
                <select class="form-select col-10" name="vga" id="vga">
                    <option selected value="">Pilih VGA</option>
                    <option value="NVIDIA">NVIDIA</option>
                    <option value="AMD">AMD</option>
                </select>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label for="psu" class="col-form-label">PSU</label>
                </div>
                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="psu" value="550W" id="check550W">
                        <label class="form-check-label" for="check550W">
                            550 W
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="psu" value="750W" id="check750W">
                        <label class="form-check-label" for="check750W">
                            750 W
                    </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="psu" value="850W" id="check850W">
                        <label class="form-check-label" for="check850W">
                            850 W
                        </label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-4" type="submit">Submit form</button>
        </form>
    </div>
</body>
</html>