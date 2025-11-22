<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>

    <!-- CSS Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
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
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
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
                <img src="../img/4rev.png" alt="Logo" width="100" height="33" class="d-inline-block align-text-top ms-lg-5" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="dropdown-item" href="#profile-content">Penjelasan</a></li>
                            <li><a class="dropdown-item" href="#profile-tujuan">Tujuan</a></li>
                            <li><a class="dropdown-item" href="#profile-dev">Developer</a></li>
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
                padding: 15px;
                background-color: maroon;
            }
            .dropdown-menu {
                background-color: transparent;
                border: none;
                margin-left: 15px;
            }
            .dropdown-item {
                color: white !important;
                padding: 8px 15px;
            }
            .dropdown-item:hover {
                background-color: rgba(0,0,0,0.1);
            }
            .nav-item {
                margin: 5px 0;
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

    <!-- Header -->
    <section id="profile-content" class="head-text">
        <div class="container text-start mt-5 pt-5">
            <div data-aos="fade-right"
            data-aos-duration="1000"><h1 class="display-5 fw-bold mb-3">
                <span class="text-danger">Apa</span> itu
            </h1></div>
            <div data-aos="zoom-in-down"
            data-aos-duration="1000"><img src="../img/deskr.png" alt="Logo" width="auto" height="auto" class="d-inline-block align-text-top mb-3" /></div>
        </div>
    </section>

    <!-- Content -->
    <section class="mt-2 mb-5">
        <div data-aos="fade-up"
        data-aos-duration="1000" class="container">
            <div class="row">
                <!-- Penjelasan -->
                <div class="col-md-12">
                    <p class="text-break-word text-justify lead" style="text-align: justify;">
                        BARAT (Bantuan Darurat) adalah sebuah platform digital yang dirancang untuk menyediakan akses cepat dan mudah ke layanan darurat di Indonesia. Website ini bertujuan untuk membantu masyarakat umum, wisatawan, dan pendatang dalam situasi kritis dengan menyediakan informasi penting seperti nomor darurat, panduan pertolongan pertama, serta artikel terkini seputar bencana alam dan situasi darurat.
                        Website ini dibuat untuk memberikan informasi mengenai nomor
                        darurat yang dapat dihubungi dalam keadaan darurat, panduan
                        pertolongan pertama, serta berita dan artikel terkait pweristiwa
                        terkini. BARAT dirancang untuk digunakan oleh siapa saja, baik masyarakat umum, wisatawan, maupun pendatang, tanpa batasan login atau registrasi. Semua fitur dapat diakses secara gratis dan mudah melalui perangkat desktop maupun mobile. Dalam situasi darurat, setiap detik sangat berharga. BARAT hadir untuk memberikan solusi yang cepat, akurat, dan mudah diakses, sehingga pengguna dapat merespons situasi darurat dengan lebih percaya diri dan efektif.</p>
                </div>
            </div>
    </section>

    <!-- Header Tujuan -->
    <section id="profile-tujuan" class="head-text ">
        <div class="container text-start mt-5 pt-5">
            <div data-aos="fade-right"
            data-aos-duration="1000"><h1 class="display-5 fw-bold mb-3">
                Apa <span class="text-danger">Tujuan</span> dibuatnya
            </h1></div>
            <div data-aos="zoom-in-down"
            data-aos-duration="1000"><img src="../img/deskr.png" alt="Logo" width="auto" height="auto" class="d-inline-block align-text-top mb-3" /></div>
        </div>
    </section>

    <section class="mt-2 mb-5">
        <div data-aos="fade-up"
        data-aos-duration="1000" class="container">
            <div class="row">
                <!-- Tujuan -->
                <div class="col-md-12">
                    <p class="text-break-word text-justify lead" style="text-align: justify;">
                        BARAT memudahkan pengguna untuk menemukan dan menghubungi layanan darurat seperti ambulans, pemadam kebakaran, polisi, dan layanan kesehatan mental. Kami ingin menyediakan panduan praktis tentang tindakan awal yang dapat dilakukan saat menghadapi situasi darurat, sehingga pengguna dapat merespons lebih cepat dan efektif. BARAT juga memberikan artikel dan berita terkait teknologi terkini serta isu-isu terkini seputar bencana alam dan situasi darurat. </p>
                </div>
            </div>
    </section>

    <!-- Header Dev-->
    <section id="profile-dev" class="head-text">
    <div data-aos="fade-left"
     data-aos-duration="1000" class="container text-start mt-5 pt-5">
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

    <!-- Developer -->
    <section class="mt-2 mb-5">
    <div data-aos="fade-up"
     data-aos-duration="1000" class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="../img/bungatidur.jpg" class="card-img-top object-fit-cover" style="height: 350px; width: auto;" alt="Developer 1">
            <div class="card-body">
              <h5 class="card-title text-center">Akbar Dwi Herlambang</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="../img/bungasiang.jpg" class="card-img-top object-fit-cover" style="height: 350px; width: auto;" alt="Developer 1">
            <div class="card-body">
              <h5 class="card-title text-center">Afrizal Habib Al Huda</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="../img/bungapagi.jpeg" class="card-img-top object-fit-cover" style="height: 350px; width: auto;" alt="Developer 1">
            <div class="card-body">
              <h5 class="card-title text-center">Zil Sala Zafira</h5>
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