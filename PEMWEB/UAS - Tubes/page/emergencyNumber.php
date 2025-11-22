<?php

include '../admin-page/connection.php';
$secQuery = "SELECT * FROM number ORDER BY id DESC";
$hasil = mysqli_query($connect, $secQuery);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nomor Darurat</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />

</head>

<body>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <!-- Navbar -->
    <section class="navbar">
        <nav
            class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: maroon;">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php#banner">
                    <img
                        src="../img/4rev.png"
                        alt="Logo"
                        width="100"
                        height="33"
                        class="d-inline-block align-text-top ms-5" />
                </a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../index.php#banner">Beranda</a>
                        </li>
                        <div class="dropdown">
                            <li class="nav-item mx-1">
                                <a class="nav-link nav-btn btn dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../page/tujuan.php">Tujuan</a></li>
                                    <li><a class="dropdown-item" href="../page/penjelasan.php">Penjelasan</a></li>
                                    <li><a class="dropdown-item" href="../page/developer.php">Developer</a></li>
                                </ul>
                            </li>
                        </div>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../page/emergencyNumber.php">Nomor Darurat</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../page/guidePostList.php">Panduan</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../index.php#posts">Statistik/Berita</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../admin-page/login.php">Login</a>
                        </li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-light"></div>
                            <hr class="d-lg-none my-2 text-light" />
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-light" data-bs-toggle="modal" href="#searchModal" role="button" aria-expanded="false" aria-controls="collapseExample"><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-search"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            .nav-btn {
                transition: background 0.2s, color 0.2s;
                border-radius: 0.375rem;
                padding: 0.5rem 1rem;
                margin: 0 0.25rem;
                display: inline-block;
            }

            .nav-btn:hover,
            .nav-btn:focus {
                background: #000 !important;
                color: #fff !important;
            }
        </style>
    </section>

    <!-- Hidden Search Modal -->
    <div class="modal" tabindex="-1" id="searchModal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex" role="search" action="../admin-page/search-res.php" method="GET">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                            name="result" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="container mt-5 pt-5">
        <h1 class="text-center mb-4">Daftar Nomor Darurat</h1>
        <div class="row">
            <?php while ($baris = mysqli_fetch_assoc($hasil)) : ?>
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($baris['agency']) ?></h5>
                            <p class="card-text">Nomor: <?= htmlspecialchars($baris['number']) ?></p>
                            <p class="card-text">Deskripsi: <?= htmlspecialchars($baris['description']) ?></p>
                            <a href="tel: <?= htmlspecialchars($baris['number']) ?>" class="btn btn-danger">Panggil</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</body>

</html>