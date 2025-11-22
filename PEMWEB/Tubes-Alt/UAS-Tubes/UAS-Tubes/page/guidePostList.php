<?php

include '../admin-page/connection.php';

$secQuery = "SELECT * FROM guide ORDER BY date DESC";
$hasil = mysqli_query($connect, $secQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Panduan</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- AOS CSS -->

    <style>
    :root {
  --bg-color: #ffffff;
  --text-color: #000000;
  --card-bg: #ffffff;
  --border-color: #dee2e6;
  --muted-text: #6c757d;
  --light-bg: #f8f9fa;
    }

    [data-theme="dark"] {
    --bg-color: #1a1a1a;
    --text-color: #ffffff;
    --card-bg: #2d2d2d;
    --border-color: #444444;
    --muted-text: #adb5bd;
    --light-bg: #2d2d2d;
    }

        body {
    background-color: var(--bg-color);
    color: var(--text-color);
    transition: background-color 0.3s ease, color 0.3s ease;
    }

    .card {
    background-color: var(--card-bg);
    border-color: var(--border-color);
    color: var(--text-color);
    transition: all 0.3s ease;
    }

    .bg-light {
    background-color: var(--light-bg) !important;
    }

    .text-muted {
    color: var(--muted-text) !important;
    }

    .text-dark {
    color: var(--text-color) !important;
    }

    .night-mode-toggle {
    background: none;
    border: none;
    color: #fff;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: 0.375rem;
    transition: background-color 0.2s ease;
    }

    .night-mode-toggle:hover {
    background-color: rgba(255, 255, 255, 0.1);
    }

    .night-mode-toggle svg {
    transition: transform 0.3s ease;
    }

     #backToTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 99;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 20px;
    }
   </style>
</head>

<body>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <!-- AOS SCRIPT -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS SCRIPT -->

    <!-- Navbar -->
<section class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: maroon;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php#banner">
                <img src="../img/4rev.png" alt="Logo" width="100" height="33" class="d-inline-block align-text-top ms-lg-5 ms-3" />
            </a>
            
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-btn text-light" href="../index.php#banner">Beranda</a>
                    </li>
                    <li class="nav-item mx-1 dropdown">  
                        <a class="nav-link nav-btn btn dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../page/profil.php">Penjelasan</a></li>
                            <li><a class="dropdown-item" href="../page/profil.php#profile-tujuan">Tujuan</a></li>
                            <li><a class="dropdown-item" href="../page/profil.php#profile-dev">Developer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-btn text-light" href="../page/emergencyNumber.php">Nomor Darurat</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-btn text-light" href="../page/guidePostList.php">Panduan</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-btn text-light" href="../index.php#posts">Artikel</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-btn text-light" href="../admin-page/login.php">Login</a>
                    </li>
                    <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-light"></div>
                        <hr class="d-lg-none my-2 text-light" />
                    </li>
                    <!-- Night Mode Toggle -->
                    <li class="nav-item mx-1">
                    <button class="night-mode-toggle" id="nightModeToggle" title="Toggle Night Mode">
                        <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16">
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L1.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0M14 2.343a.5.5 0 0 1-.707 0L11.879 1.929a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M2.343 14a.5.5 0 0 1-.707 0L.222 12.586a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707"/>
                        </svg>
                        <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16" style="display: none;">
                        <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                        </svg>
                    </button>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-light" data-bs-toggle="modal" href="#searchModal" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
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
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: maroon;
                padding: 15px;
                margin-top: 10px;
                border-radius: 5px;
            }
            .dropdown-menu {
                background-color: rgba(0, 0, 0, 0.2);
                border: none;
                margin-left: 15px;
            }
            .dropdown-item {
                color: white !important;
                padding: 8px 15px;
            }
            .dropdown-item:hover {
                background-color: rgba(0, 0, 0, 0.3);
            }
            .nav-item {
                margin: 5px 0;
            }
            .navbar-toggler {
                border-color: rgba(255, 255, 255, 0.5);
            }
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
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

    <!-- Head Text -->
    <section class="head-text">
        <div data-aos="fade-left"
        data-aos-duration="1000" class="container text-start mt-5 pt-5">
            <h1 class="display-5 fw-bold mb-3">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="70" height="50" viewBox="0 0 256 256" xml:space="preserve">
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 81.49 83.987 H 8.509 C 3.817 83.987 0 80.17 0 75.479 V 31.051 c 0 -4.692 3.817 -8.509 8.509 -8.509 H 81.49 c 4.692 0 8.51 3.817 8.51 8.509 v 44.428 C 90 80.17 86.183 83.987 81.49 83.987 z M 8.509 25.542 C 5.472 25.542 3 28.013 3 31.051 v 44.428 c 0 3.037 2.472 5.509 5.509 5.509 H 81.49 c 3.038 0 5.51 -2.472 5.51 -5.509 V 31.051 c 0 -3.038 -2.472 -5.509 -5.51 -5.509 H 8.509 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 51.581 71.83 H 38.419 c -0.829 0 -1.5 -0.672 -1.5 -1.5 v -8.984 h -8.985 c -0.829 0 -1.5 -0.672 -1.5 -1.5 V 46.684 c 0 -0.829 0.671 -1.5 1.5 -1.5 h 8.985 v -8.984 c 0 -0.829 0.671 -1.5 1.5 -1.5 h 13.162 c 0.828 0 1.5 0.671 1.5 1.5 v 8.984 h 8.984 c 0.828 0 1.5 0.671 1.5 1.5 v 13.162 c 0 0.828 -0.672 1.5 -1.5 1.5 h -8.984 v 8.984 C 53.081 71.158 52.409 71.83 51.581 71.83 z M 39.919 68.83 h 10.162 v -8.984 c 0 -0.828 0.672 -1.5 1.5 -1.5 h 8.984 V 48.184 h -8.984 c -0.828 0 -1.5 -0.672 -1.5 -1.5 v -8.984 H 39.919 v 8.984 c 0 0.828 -0.671 1.5 -1.5 1.5 h -8.985 v 10.162 h 8.985 c 0.829 0 1.5 0.672 1.5 1.5 V 68.83 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 59.843 25.417 H 30.157 c -0.829 0 -1.5 -0.671 -1.5 -1.5 v -7.896 c 0 -5.52 4.49 -10.01 10.01 -10.01 h 12.666 c 5.52 0 10.01 4.49 10.01 10.01 v 7.896 C 61.343 24.746 60.671 25.417 59.843 25.417 z M 31.657 22.417 h 26.686 v -6.396 c 0 -3.865 -3.145 -7.01 -7.01 -7.01 H 38.667 c -3.865 0 -7.01 3.145 -7.01 7.01 V 22.417 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 11.078 74.998 c -0.829 0 -1.5 -0.672 -1.5 -1.5 V 33.1 c 0 -0.829 0.671 -1.5 1.5 -1.5 s 1.5 0.671 1.5 1.5 v 40.398 C 12.578 74.326 11.906 74.998 11.078 74.998 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 77.856 74.998 c -0.828 0 -1.5 -0.672 -1.5 -1.5 V 33.1 c 0 -0.829 0.672 -1.5 1.5 -1.5 s 1.5 0.671 1.5 1.5 v 40.398 C 79.356 74.326 78.685 74.998 77.856 74.998 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 53.059 25.417 H 36.942 c -0.829 0 -1.5 -0.671 -1.5 -1.5 v -7.101 c 0 -2.244 1.826 -4.069 4.069 -4.069 h 10.977 c 2.244 0 4.07 1.826 4.07 4.069 v 7.101 C 54.559 24.746 53.887 25.417 53.059 25.417 z M 38.442 22.417 h 13.117 v -5.601 c 0 -0.59 -0.48 -1.069 -1.07 -1.069 H 39.511 c -0.59 0 -1.069 0.479 -1.069 1.069 V 22.417 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                </span>
                Panduan Pertolongan Pertama
            </h1>
            <hr class="border-2 border-dark mb-2" />
            <p class="lead">Pertolongan pertama adalah pemberian bantuan segera kepada seseorang yang mengalami sakit, cedera, atau kecelakaan yang memerlukan penanganan medis dasar, sebelum bantuan medis profesional tiba. </p>
        </div>
    </section>

    <!-- Content -->
    <section id="guide-post-list" class="mb-5 mt-5">
        <div data-aos="fade-up"
        data-aos-duration="1000" class="container">
            <div class="row g-4">
                <?php while ($baris = mysqli_fetch_assoc($hasil)) : ?>

                    <div class="col-md-4">
                        <div class="card shadow-lg h-100">
                            <img src="../admin-page/page/uploads/<?= htmlspecialchars($baris['image']) ?>" class="card-img-top object-fit-cover" style="height: 350px" alt="Pertolongan Pertama 1">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($baris['title']) ?></h5>
                                <a href="../admin-page/page/guide/guide.php?id=<?= $baris['id'] ?>" class="btn btn-danger">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <button 
        id="backToTopBtn" 
        class="btn btn-danger shadow" 
        title="Kembali ke atas">
        ↑
    </button>

    <script>
        // Night Mode Toggle Functionality
        const nightModeToggle = document.getElementById('nightModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const body = document.body;

        // Check for saved theme preference or default to 'light' mode
        const currentTheme = localStorage.getItem('theme') || 'light';

        // Apply the saved theme on page load
        if (currentTheme === 'dark') {
        body.setAttribute('data-theme', 'dark');
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'inline';
        }

        // Toggle theme function
        function toggleTheme() {
        const currentTheme = body.getAttribute('data-theme');
        
        if (currentTheme === 'dark') {
            body.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
            sunIcon.style.display = 'inline';
            moonIcon.style.display = 'none';
        } else {
            body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'inline';
        }
        }

        // Add event listener to toggle button
        nightModeToggle.addEventListener('click', toggleTheme);

        // Munculkan tombol ketika user scroll ke bawah 20px
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backToTopBtn").style.display = "block";
            } else {
                document.getElementById("backToTopBtn").style.display = "none";
            }
        }

        // Ketika tombol diklik, scroll ke atas halaman
        document.getElementById("backToTopBtn").addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>