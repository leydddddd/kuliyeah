<?php
include '../../connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $postId = intval($_GET['id']);

    // Tambah views +1
    $updateViews = "UPDATE guide SET views = views + 1 WHERE id = $postId";
    mysqli_query($connect, $updateViews);

    // Ambil detail post
    $query = "SELECT * FROM guide WHERE id = $postId";
    $result = mysqli_query($connect, $query);
    $post = mysqli_fetch_assoc($result);

    if (!$post) {
        echo "Post tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak valid.";
    exit;
}

$id = intval($_GET['id']);
$query = "SELECT * FROM guide WHERE id = $id";
$result = mysqli_query($connect, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Berita tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($data['title']) ?></title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <style>
        .content-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .content-text {
            text-align: justify;
            font-size: 1.05rem;
        }

        @media (max-width: 576px) {
            .content-text {
                font-size: 0.95rem;
            }
        }
    </style>
</head>

<body>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <!-- Navbar -->
    <section class="navbar">
        <nav
            class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: maroon;">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../../index.php">
                    <img
                        src="../../../img/4rev.png"
                        alt="Logo"
                        width="100"
                        height="33"
                        class="d-inline-block align-text-top ms-5" />
                </a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../../../index.php">Beranda</a>
                        </li>
                        <div class="dropdown">
                            <li class="nav-item mx-1">
                                <a class="nav-link nav-btn btn dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../../../page/tujuan.php">Tujuan</a></li>
                                    <li><a class="dropdown-item" href="../../../page/penjelasan.php">Penjelasan</a></li>
                                    <li><a class="dropdown-item" href="../../../page/developer.php">Developer</a></li>
                                </ul>
                            </li>
                        </div>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../../../page/emergencyNumber.php">Nomor Darurat</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../../../page/guidePostList.php">Panduan</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../../../index.php#posts">Artikel</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link nav-btn text-light" href="../../login.php">Login</a>
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
                    <form class="d-flex" role="search" action="../../search-res.php" method="GET">
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

    <!-- Head Title -->
    <section class="mt-3">
        <div class="container pt-1 mb-4">
            <!-- Title -->
            <h1 class="text-start mt-5"><?= htmlspecialchars($data['title']) ?></h1>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-danger text-white mb-4">
        <div class=" container pt-3 pb-3">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="../../../Img-panduan/<?= htmlspecialchars($data['image']) ?>" class="content-image img-fluid rounded-3 mb-3" style="height: 280px; width: min-content;" />
                </div>
                <div class="col-md-6">
                    <p class="lead text-break-word text-justify" style="text-align: justify;">
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Description/Content 2 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-break-word text-justify" style="text-align: justify;">
                        <?= nl2br(htmlspecialchars($data['content2'])) ?>
                    </p>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <?php
                    // Ambil nomor telepon dari tabel number berdasarkan label di guide
                    $label = mysqli_real_escape_string($connect, $data['label']);
                    $numberQuery = "
                        SELECT n.number 
                        FROM guide g 
                        JOIN number n ON g.label = n.agency 
                        WHERE g.id = $id
                        LIMIT 1
                    ";
                    $numberResult = mysqli_query($connect, $numberQuery);
                    $numberRow = mysqli_fetch_assoc($numberResult);
                    $phoneNumber = $numberRow ? $numberRow['number'] : '';
                    ?>

                    <?php if ($phoneNumber): ?>
                        <a class="btn btn-outline-secondary btn-lg" href="tel:<?= htmlspecialchars($phoneNumber) ?>">
                            Telepon Sekarang
                        </a>
                    <?php else: ?>
                        <button class="btn btn-outline-secondary btn-lg" disabled>
                            Nomor tidak tersedia
                        </button>
                    <?php endif; ?>
                </div>
                <div class="col-md-7">
                    <div class="container">
                        <p class="text-end">
                            <?= htmlspecialchars($data['source']) ?><br>
                            <?= date('d F Y', strtotime($data['date'])) ?><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer" class="mt-5">
        <div>
            <nav class="navbar bg-dark navbar-dark shadow-lg navbar-expand">
                <div class="container-fluid justify-content-center">
                    <span class="navbar-text" style="margin: 25px">
                        All Rights Reserved © 2025
                    </span>
                </div>
            </nav>
        </div>
    </section>
</body>

</html>