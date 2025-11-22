
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
  <style>
    .emergency-link:hover .card,
    .guide-links:hover .card {
      background-color: rgb(240, 128, 139);
      /* Contoh: biru seperti btn-primary */
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
  </style>
</head>

<body>
  <!-- JS Bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>

  <!-- Navbar -->
  <section class="navbar">
    <nav
      class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: maroon;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php#banner">
          <img
            src="./img/4rev.png"
            alt="Logo"
            width="100"
            height="33"
            class="d-inline-block align-text-top ms-5" />
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="./index.php#banner">Beranda</a>
            </li>
            <div class="dropdown">
              <li class="nav-item mx-1">
                <a class="nav-link nav-btn btn dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./page/tujuan.php">Tujuan</a></li>
                  <li><a class="dropdown-item" href="./page/penjelasan.php">Penjelasan</a></li>
                  <li><a class="dropdown-item" href="./page/developer.php">Developer</a></li>
                </ul>
              </li>
            </div>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="page/emergencyNumber.php">Nomor Darurat</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="page/guidePostList.php">Panduan</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="#posts">Statistik/Berita</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link nav-btn text-light" href="./admin-page/login.php">Login</a>
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
    <div
      class="container-fluid position-relative p-0"
      style="min-height: 100vh; overflow: hidden">
      <img
        src="img/new.jpg"
        alt="akudiriku"
        class="img-fluid w-100"
        style="object-fit: cover; height: 100vh; filter: brightness(0.6)" />
      <div
        class="position-absolute top-50 start-50 translate-middle text-center w-100">
        <h1 class="text-white display-6 mx-auto" style="font-size:10vw; line-height:1; max-width:80vw; font-family: 'Chau Philomene One', sans-serif;">BANTUAN DARURAT</h1>
        <p class="text-white fs-4">
          Website khusus panggilan, panduan dan berita yang berkaitan dalam keadaan darurat.
        </p>
      </div>
    </div>
  </section>

  <!-- Deskripsi Singkat -->
  <section class="description mt-2 mb-5 py-5">
    <div class="container mt-5">
      <div class="row mb-4">
        <div class="col-md-7">
          <h2 class="me-3 mb-0">Apa itu</h2>
          <img
            src="./img/deskr.png"
            alt="Logo"
            style="height: 60px; width: auto;"
            class="d-inline-block align-text-top ms-0" />
          <p class="text-muted mt-3 text-break-word text-justify" style="text-align: justify;">
            Website ini dibuat untuk memberikan informasi mengenai nomor
            darurat yang dapat dihubungi dalam keadaan darurat, panduan
            pertolongan pertama, serta berita dan artikel terkait teknologi
            terkini. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <button
            class="btn btn-danger mt-3"
            onclick="window.location.href='page/penjelasan.php'">Selengkapnya</button>
        </div>
        <div class="col-md-5 d-flex align-items-end">
          <img
            src="./img/food.png"
            alt="Logo"
            class="img-fluid float-end"
            style="max-width: 100%; height: 400px; object-fit: contain; margin-left: auto; margin-right: 0; display: block;" />
        </div>
      </div>
  </section>

  <!-- Card -->
  <section class="guide-no-card bg-danger mt-2 py-5" id="projects">
    <div class="container mt-2">
      <h2 class="text-center text-white mb-5">
        Nomor Darurat dan Panduan Pertolongan Pertama
      </h2>
      <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4">
          <a href="./page/emergencyNumber.php" class="text-decoration-none emergency-link">
            <div class="card h-100 shadow text-center">
              <div class="card-body">
                <div class="mb-3">
                  <!-- Call Phone Icon -->
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
                  <!-- Medical Kit Icon -->
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
        <!-- end card -->
      </div>
    </div>
  </section>

  <!-- Berita Artikel -->
  <section class="news-articles mt-2 mb-5 py-5 bg-light posts-article" id="posts">
    <div class="container">
      <h2 class="text-center mb-4">Berita &amp; Artikel</h2>
      <p class="text-center mb-5">
        Berita dan Artikel seputar kesehatan dan tips untuk raga dan jasmani.
      </p>
      <div class="row g-4">
        <!-- Article -->
        <?php
        $count = 0;
        while ($count < 3 && ($row = mysqli_fetch_assoc($result))) :
          $count++;
        ?>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img
                src="admin-page/page/uploads/<?= htmlspecialchars($row['image']) ?>"
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
</body>

</html>