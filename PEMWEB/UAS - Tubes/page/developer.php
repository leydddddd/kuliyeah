<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Kita</title>

  <!-- CSS Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous" />
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

  <!-- Header -->
  <section class="head-text">
    <div class="container text-start mt-5 pt-5">
      <h1 class="display-5 fw-bold mb-3">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
          </svg>
        </span>
        Developer
      </h1>
      <hr class="border-2 border-dark mb-2" />
      <p class="lead fw-bold">Meet The CREW</p>
    </div>
  </section>

  <!-- Content -->
  <section id="profile-content" class="mt-2 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="../img/bungatidur.jpg" class="card-img-top object-fit-cover" style="height: 350px; width: auto;" alt="Developer 1">
            <div class="card-body">
              <h5 class="card-title text-center">Bunga Tidur Di Malam Hari</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="../img/bungasiang.jpg" class="card-img-top object-fit-cover" style="height: 350px; width: auto;" alt="Developer 1">
            <div class="card-body">
              <h5 class="card-title text-center">Bunga Tidur Siang Malu</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="../img/bungatidur.jpg" class="card-img-top object-fit-cover" style="height: 350px; width: auto;" alt="Developer 1">
            <div class="card-body">
              <h5 class="card-title text-center">Bunga Tidur Di Malam Hari</h5>
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
            All Rights Reserved © 2021
          </span>
        </div>
      </nav>
    </div>
  </section>
</body>

</html>