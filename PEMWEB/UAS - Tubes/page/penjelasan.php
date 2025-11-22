<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penjelasan</title>

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
                <span class="text-danger">Apa</span> itu
            </h1>
            <img src="../img/deskr.png" alt="Logo" width="auto" height="auto" class="d-inline-block align-text-top mb-3" />
        </div>
    </section>

    <!-- Content -->
    <section id="profile-content" class="mt-2 mb-5">
        <div class="container">
            <div class="row">
                <!-- Penjelasan -->
                <div class="col-md-12">
                    <p class="text-break-word text-justify lead" style="text-align: justify;">
                        Barat adalah singkatan dari Bantuan Darurat, Barat sendiri merupakan situs web yang menampilknasd absdkjlhalksdhuoai auhsdiuhaius aushdiuahs aisudhiauhsiudh aiushdiuahs aiushdais jahsdjhasd aiushiuhidahu asdasd uhhkj asdasd asdasdas adasdsa paskdpasldplasp mkaknkfnas anwkmndakmdas </p>
                    <p class="text-break-word text-justify lead" style="text-align: justify;">
                        Barat adalah singkatan dari Bantuan Darurat, Barat sendiri merupakan situs web yang menampilknasd absdkjlhalksdhuoai auhsdiuhaius aushdiuahs aisudhiauhsiudh aiushdiuahs aiushdais jahsdjhasd aiushiuhidahu asdasd uhhkj asdasd asdasdas adasdsa paskdpasldplasp mkaknkfnas anwkmndakmdas </p>
                    <p class="text-break-word text-justify lead " style="text-align: justify;">
                        Barat adalah singkatan dari Bantuan Darurat, Barat sendiri merupakan situs web yang menampilknasd absdkjlhalksdhuoai auhsdiuhaius aushdiuahs aisudhiauhsiudh aiushdiuahs aiushdais jahsdjhasd aiushiuhidahu asdasd uhhkj asdasd asdasdas adasdsa paskdpasldplasp mkaknkfnas anwkmndakmdas </p>
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