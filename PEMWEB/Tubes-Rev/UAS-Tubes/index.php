<?php

include 'admin-page/connection.php';

$query = "SELECT * FROM news ORDER BY date DESC";
$result = mysqli_query($connect, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda</title>

  <!-- Chau Philomene Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One:ital@0;1&display=swap" rel="stylesheet">

  <!-- CSS Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous" />

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

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

    .emergency-link:hover .card,
    .guide-links:hover .card {
      background-color: rgb(240, 128, 139);
      color: #fff;
    }

    .emergency-link:hover .card-title,
    .emergency-link:hover .card-text,
    .guide-links:hover .card-title,
    .guide-links:hover .card-text {
      color: #fff;
    }

    .emergency-link:hover svg,
    .guide-links:hover svg {
      fill: #fff;
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

    @media (max-width: 991.98px) {
      .dropdown-menu {
        background-color: transparent;
        border: none;
      }

      .dropdown-item {
        color: white !important;
        padding-left: 2rem;
      }

      .dropdown-item:hover {
        background-color: transparent;
      }
    }

    img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <!-- JS Bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>

  <!-- AOS SCRIPT -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Navbar -->
  <section class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: maroon;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php#banner">
          <img src="./img/4rev.png" alt="Logo" width="100" height="33" class="d-inline-block align-text-top ms-lg-5" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="./index.php#banner">Beranda</a>
            </li>
            <li class="nav-item mx-1 dropdown">
              <a class="nav-link nav-btn btn dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./page/profil.php">Penjelasan</a></li>
                <li><a class="dropdown-item" href="./page/profil.php#profile-tujuan">Tujuan</a></li>
                <li><a class="dropdown-item" href="./page/profil.php#profile-dev">Developer</a></li>
              </ul>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="page/emergencyNumber.php">Nomor Darurat</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="page/guidePostList.php">Panduan</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="#posts">Artikel</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="./admin-page/login.php">Login</a>
            </li>
            <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
              <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-light"></div>
              <hr class="d-lg-none my-2 text-light" />
            </li>
            <!-- Night Mode Toggle -->
            <li class="nav-item mx-1">
              <button class="night-mode-toggle" id="nightModeToggle" title="Toggle Night Mode">
                <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16">
                  <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L1.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0M14 2.343a.5.5 0 0 1-.707 0L11.879 1.929a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M2.343 14a.5.5 0 0 1-.707 0L.222 12.586a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707" />
                </svg>
                <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16" style="display: none;">
                  <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
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
  </section>

  <!-- Hidden Search Modal -->
  <div class="modal" tabindex="-1" id="searchModal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="d-flex" role="search" action="./admin-page/search-res.php" method="GET">
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

  <!-- Banner -->
  <section class="banner" id="banner">
    <div class="container-fluid position-relative p-0" style="min-height: 100vh; overflow: hidden">
      <img
        src="img/banner.jpeg"
        alt="akudiriku"
        class="img-fluid w-100"
        style="object-fit: cover; height: 100vh; filter: brightness(0.6)" />
      <div
        data-aos="zoom-in-down"
        data-aos-duration="1000"
        class="position-absolute top-50 start-50 translate-middle text-center w-100">
        <h1 class="text-white display-6 mx-auto" style="font-size:10vw; line-height:1; max-width:80vw; font-family: 'Chau Philomene One', sans-serif;">BANTUAN DARURAT</h1>
        <p class="text-white fs-4">
          Website khusus panggilan, panduan dan berita yang berkaitan dalam keadaan darurat.
        </p>
        <a class="btn btn-danger btn-lg" href="#desc" role="button">Let's Go!</a>
      </div>
    </div>
  </section>

  <!-- Deskripsi Singkat -->
  <section id="desc" class="description mt-4 py-5">
    <div class="container mt-5">
      <div class="row mb-4">
        <div data-aos="fade-right" data-aos-duration="1000" class="col-md-7">
          <h2 class="me-3 mb-0">Apa itu</h2>
          <img
            src="./img/deskr.png"
            alt="Logo"
            style="height: 60px; width: auto;"
            class="d-inline-block align-text-top ms-0" />
          <p class="text-muted mt-3 text-break-word text-justify" style="text-align: justify;">
            BARAT (Bantuan Darurat) adalah sebuah platform digital yang dirancang untuk menyediakan akses cepat dan mudah ke layanan darurat di Indonesia. Website ini bertujuan untuk membantu masyarakat umum, wisatawan, dan pendatang dalam situasi kritis dengan menyediakan informasi penting seperti nomor darurat, panduan pertolongan pertama, serta artikel terkini seputar bencana alam dan situasi darurat.
            Website ini dibuat untuk memberikan informasi mengenai nomor
            darurat yang dapat dihubungi dalam keadaan darurat, panduan
            pertolongan pertama, serta berita dan artikel terkait pweristiwa
            terkini.
          </p>
          <button
            class="btn btn-danger mt-3"
            onclick="window.location.href='page/profil.php'">Selengkapnya</button>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class="col-md-5 d-flex align-items-end">
          <img
            src="./img/food.png"
            alt="Logo"
            class="img-fluid float-end"
            style="max-width: 100%; height: 400px; object-fit: contain; margin-left: auto; margin-right: 0; display: block;" />
        </div>
      </div>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,165.3C384,149,480,107,576,117.3C672,128,768,192,864,208C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>

  <section class="guide-no-card bg-danger py-5" id="projects">
    <div class="container mt-2">
      <div data-aos="fade-right" data-aos-duration="1000">
        <h2 class="text-center text-white mb-5">
          Nomor Darurat dan Panduan Pertolongan Pertama
        </h2>
      </div>

      <div data-aos="fade-up" data-aos-duration="1000" class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4">
          <a href="./page/emergencyNumber.php" class="text-decoration-none emergency-link">
            <div class="card h-100 shadow text-center">
              <div class="card-body">
                <div class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                  </svg>
                </div>
                <h5 class="card-title text-dark">
                  Nomor Darurat
                </h5>
                <p class="card-text text-dark text-break-word text-justify" style="text-align: justify;">
                  Daftar nomor darurat yang dapat dihubungi dalam keadaan
                  darurat, seperti nomor polisi, ambulans, pemadam kebakaran,
                  dan layanan kesehatan lainnya.
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <a href="./page/guidePostList.php" class="text-decoration-none guide-links">
            <div class="card h-100 shadow text-center">
              <div class="card-body">
                <div class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                    <path d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9z" />
                    <path d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8z" />
                  </svg>
                </div>
                <h5 class="card-title text-dark">
                  Panduan Pertolongan Pertama
                </h5>
                <p class="card-text text-break-word text-justify" style="text-align: justify;">
                  Panduan langkah-langkah pertolongan pertama yang dapat
                  dilakukan dalam situasi darurat, seperti penanganan luka,
                  pingsan, atau serangan jantung.
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1" d="M0,192L60,202.7C120,213,240,235,360,224C480,213,600,171,720,144C840,117,960,107,1080,128C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>

  <!-- Berita Artikel -->
  <section class="news-articles mt-2 mb-5 py-5 bg-light posts-article" id="posts">
    <div class="container">
      <div data-aos="fade-right" data-aos-duration="1000">
        <h2 class="text-center mb-4"> Artikel</h2>
      </div>
      <div data-aos="fade-left" data-aos-duration="1000">
        <p class="text-center mb-5">
          Artikel seputar kesehatan dan tips untuk raga dan jasmani.
        </p>
      </div>

      <div class="row g-4">
        <?php
        $count = 0;
        while ($count < 9 && ($row = mysqli_fetch_assoc($result))) :
          $count++;
        ?>
          <div data-aos="zoom-in-up" data-aos-duration="1000" class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img
                src="./Img-artikel/<?= htmlspecialchars($row['image']) ?>"
                class="card-img-top" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">
                  <a
                    href="admin-page/page/article/post.php?id=<?= $row['id'] ?>"
                    class="text-decoration-none text-dark">
                    <?= htmlspecialchars($row['title']) ?>
                  </a>
                </h5>
                <div class="mb-2 text-muted small">
                  <span><?= date("d F Y", strtotime($row['date'])) ?></span>
                </div>
                <p class="card-text mb-0">
                  <?= htmlspecialchars(mb_strimwidth($row['content'], 0, 120, '...')) ?>
                </p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <section id="footer">
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

    // Back to Top Button Functionality
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

    document.getElementById("backToTopBtn").addEventListener("click", function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  </script>

</body>

</html>