<?php

//keamanan agar tidak bisa diakses sembarangan
session_start();
if (!isset($_SESSION['username']) || !$_SESSION['isLoggedIn']) {
    header("Location: ../index.php");
    exit();
}

include './connection.php';

$query = "SELECT * FROM news ORDER BY date DESC";
$result = mysqli_query($connect, $query);

$secQuery = "SELECT * FROM guide ORDER BY date DESC";
$hasil = mysqli_query($connect, $secQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            padding: 0;
            transition: all 0.3s ease;
        }

        .navbar {
            height: 60px;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar .container-fluid {
            height: 100%;
            align-items: center;
            display: flex;
        }

        #sidebar {
            position: fixed;
            top: 60px;
            /* Sesuaikan dengan tinggi navbar */
            left: 0;
            width: 250px;
            height: calc(100% - 60px);
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 1040;
        }

        body.sidebar-open #sidebar {
            transform: translateX(0);
        }

        #content {
            margin-left: 0;
            padding: 1rem;
            transition: margin-left 0.3s ease;
        }

        body.sidebar-open #content {
            margin-left: 250px;
        }

        @media (max-width: 768px) {
            #sidebar {
                width: 200px;
            }

            body.sidebar-open #content {
                margin-left: 200px;
            }
        }

        .sidebar-toggle-btn {
            font-size: 1.75rem;
            display: flex;
            align-items: center;
        }

        .search-form {
            width: 100%;
            max-width: 600px;
        }

        .search-form input {
            height: 42px;
            font-size: 1rem;
        }

        .search-form button {
            height: 42px;
        }

        .navbar {
            height: 60px;
            position: relative;
        }

        .navbar .search-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 600px;
        }

        .search-form input,
        .search-form button {
            height: 40px;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-body-tertiary fixed-top shadow">
        <div class="container-fluid px-3 d-flex align-items-center">
            <!-- Tombol Sidebar -->
            <button class="btn sidebar-toggle-btn me-3" onclick="toggleSidebar()">
                <i class="bi bi-list fs-3"></i>
            </button>

            <!-- Search Bar (Tengah) -->
            <div class="search-wrapper">
                <form class="d-flex search-form" role="search" action="search-res.php" method="GET">
                    <input class="form-control me-2 flex-grow-1" type="search" placeholder="Search" aria-label="Search" name="result" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <div id="sidebar" class="p-3">
        <h4 class="mb-4">Admin Menu</h4>
        <ul class="nav nav-underline flex-column">
            <li class="nav-item mb-2">
                <a href="dashboard.php" class="nav-link active">
                    <i class="bi bi-file-earmark-text me-2"></i> Post
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="overview.php" class="nav-link">
                    <i class="bi bi-bar-chart me-2"></i> Overview
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="logout.php" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div id="content" class="pt-2">
        <div class="container mt-4">
            <div class="row gy-4">
                <div class="col-12 mb-1">
                    <h2>Dashboard Admin</h2>
                    <p>List Daftar Postingan.</p>
                    <a href="./page/article/add-post.php" class="btn btn-success">
                        <i class="bi bi-plus-circle me-2"></i> Tambah Postingan Artikel Baru
                    </a>
                    <a href="./page/guide/addGuidePost.php" class="btn btn-success">
                        <i class="bi bi-plus-circle me-2"></i> Tambah Postingan Panduan Baru
                    </a>
                </div>
                <!-- Tab Daftar Postingan -->
                <ul class="nav nav-tabs mb-1" id="postTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="artikel-tab" data-bs-toggle="tab" data-bs-target="#artikel" type="button" role="tab" aria-controls="artikel" aria-selected="true">
                            Artikel
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="panduan-tab" data-bs-toggle="tab" data-bs-target="#panduan" type="button" role="tab" aria-controls="panduan" aria-selected="false">
                            Panduan
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="postTabContent">
                    <!-- Tab Artikel -->
                    <div class="tab-pane fade show active" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <div class="row align-items-center border p-3 shadow-sm rounded mb-3">
                                <!-- Gambar -->
                                <div class="col-2">
                                    <img src="../Img-artikel/thumbnails/<?= htmlspecialchars('thumb_' . $row['image']) ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($row['title']) ?>" />
                                </div>
                                <!-- Judul & Tanggal -->
                                <div class="col-8">
                                    <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Tanggal Publikasi: <?= date("d F Y", strtotime($row['date'])) ?>
                                        </small>
                                    </p>
                                </div>
                                <!-- Aksi -->
                                <div class="col-2 text-end">
                                    <a href="./page/article/edd-post.php?id=<?= $row['id'] ?>" class="btn btn-lg"><i class="bi bi-scissors"></i></a>
                                    <a href="./page/article/processDeletePost.php?id=<?= $row['id'] ?>" class="btn btn-lg" onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash"></i></a>
                                    <a href="./page/article/post.php?id=<?= $row['id'] ?>" class="btn btn-lg"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Tab Panduan -->
                    <div class="tab-pane fade" id="panduan" role="tabpanel" aria-labelledby="panduan-tab">
                        <?php while ($baris = mysqli_fetch_assoc($hasil)) : ?>
                            <div class="row align-items-center border p-3 shadow-sm rounded mb-3">
                                <!-- Gambar -->
                                <div class="col-2">
                                    <img src="../../../Img-panduan/thumbnails/<?= htmlspecialchars('thumb_' . $baris['image']) ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($baris['title']) ?>" />
                                </div>
                                <!-- Judul & Tanggal -->
                                <div class="col-8">
                                    <h5 class="card-title"><?= htmlspecialchars($baris['title']) ?></h5>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Tanggal Publikasi: <?= date("d F Y", strtotime($baris['date'])) ?>
                                        </small>
                                    </p>
                                </div>
                                <!-- Aksi -->
                                <div class="col-2 text-end">
                                    <a href="./page/guide/editGuidePost.php?id=<?= $baris['id'] ?>" class="btn btn-lg"><i class="bi bi-scissors"></i></a>
                                    <a href="./page/guide/processDeleteGuide.php?id=<?= $baris['id'] ?>" class="btn btn-lg" onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash"></i></a>
                                    <a href="./page/guide/guide.php?id=<?= $baris['id'] ?>" class="btn btn-lg"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        function toggleSidebar() {
            document.body.classList.toggle('sidebar-open');
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>