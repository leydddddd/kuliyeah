<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekape Workspace</title>

    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Sedikit Style Saja -->
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <!-- JS scripts -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <header class="header container-fluid px-0">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: #fd7e14;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!-- ini logo dah lumayan lah -->
                    <img src="../res/tkp_logo2.png" alt="Tekape Workspace Logo" height="35" class="d-inline-block align-text-top ms-5">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- progress 0/4 page -->
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Rooms</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-light"></div>
                            <hr class="d-lg-none my-2 text-light" />
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar Ends-->

        <!--Banner-->
        <section class="banner">
            <div class="jumbotro">
                <div
                    class="container-fluid position-relative p-0"
                    style="min-height: 100vh; overflow: hidden">
                    <!-- jaga-jaga harus diganti ke delete image -->
                    <img
                        src="../res/banner1.jpg"
                        alt="akudiriku"
                        class="img-fluid w-100"
                        style="object-fit: cover; height: 100vh; filter: brightness(0.6)" />
                    <div
                        class="position-absolute top-50 start-50 translate-middle text-center w-100">
                        <h1 class="text-warning display-6 mx-auto" style="font-size:8vw; line-height:1; max-width:80vw;">Pesan Ruangan Dengan</h1>
                        <h1 class="text-white display-6 mx-auto" style="font-size:8vw; line-height:1; max-width:80vw;">Mudah & Cepat</h1>
                        <p class="text-white fs-4 mt-4 mx-auto">
                            Solusi booking ruangan terbaik untuk kebutuhan meeting, workshop, dan acara Anda.
                            Proses cepat, transparan dan terpercaya.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner Ends-->
    </header>
    <!-- Header Ends-->

    <!--Content-->
    <section class="main-content container-fluid px-0 d-flex flex-column">
        <div class="row pt-4 mt-4">
            <!-- Title -->
            <div class="text-center mb-5 mt-4 pt-2">
                <p class="fw-bold fs-1">
                    <span class="text-danger">Kenapa memilih</span>
                    <span class="text-warning">Tekape Workspace?</span>
                </p>
                <p class="fs-5 text-muted">
                    Temukan alasan mengapa Tekape Workspace adalah pilihan terbaik untuk kebutuhan ruang kerja Anda.
                </p>
            </div>
            <!-- Cards -->
            <div class="flex-grow-1 bg-warning d-flex align-items-center pt-5 pb-5">
                <div class="container">
                    <div class="row gx-5 gy-5">
                        <div class="col-md-4">
                            <!-- gah bagus, tinggal di refine sikit -->
                            <!-- icon nya tak colorful enough dude -->
                            <div class="card h-100 text-center shadow-sm">
                                <div class="card-body">
                                    <!-- Icon nak handsome -->
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning mb-3"
                                        style="width: 80px; height: 80px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-rocket-takeoff" viewBox="0 0 16 16">
                                            <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362s.96-1.932.362-2.531c-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532" />
                                            <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9 9 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a10 10 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093q.1.026.16.045c.184.06.279.13.351.295l.029.073a3.5 3.5 0 0 1 .157.721c.055.485.051 1.178-.159 2.065m-4.828 7.475.04-.04-.107 1.081a1.54 1.54 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a9 9 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006M5.205 5c-.625.626-.94 1.351-1.004 2.09a9 9 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a3 3 0 0 0-.045-.283 3 3 0 0 0-.3-.041Z" />
                                            <path d="M7.009 12.139a7.6 7.6 0 0 1-1.804-1.352A7.6 7.6 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z" />
                                        </svg>
                                    </div>

                                    <!-- Text -->
                                    <h5 class="card-title fw-bold">Booking Cepat</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 text-center shadow-sm">
                                <div class="card-body">
                                    <!-- Icon nak handsome -->
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning mb-3"
                                        style="width: 80px; height: 80px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
                                        </svg>
                                    </div>

                                    <!-- Text -->
                                    <h5 class="card-title fw-bold">Pembayaran Aman</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 text-center shadow-sm">
                                <div class="card-body">
                                    <!-- Icon nak handsome -->
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning mb-3"
                                        style="width: 80px; height: 80px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                        </svg>
                                    </div>

                                    <!-- Text na cool -->
                                    <h5 class="card-title fw-bold">Real-Time Update</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 text-center shadow-sm">
                                <div class="card-body">
                                    <!-- Icon nak handsome -->
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning mb-3"
                                        style="width: 80px; height: 80px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                        </svg>
                                    </div>

                                    <!-- Text -->
                                    <h5 class="card-title fw-bold">Fleksibel</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 text-center shadow-sm">
                                <div class="card-body">
                                    <!-- Icon nak handsome -->
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning mb-3"
                                        style="width: 80px; height: 80px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                                        </svg>
                                    </div>

                                    <!-- Text -->
                                    <h5 class="card-title fw-bold">Kualitas Terjamin</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 text-center shadow-sm">
                                <div class="card-body">
                                    <!-- Icon nak handsome -->
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning mb-3"
                                        style="width: 80px; height: 80px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                            <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
                                        </svg>
                                    </div>

                                    <!-- Text -->
                                    <h5 class="card-title fw-bold">Dukungan 24/7</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content Ends-->

    <!--Footer -->
    <section class="footer container-fluid bg-light text-white px-0">
        <div class="row">
            <!-- tuhan tolong, ini kenapa tidak bisa-bisa-->
            <div class="row" style="height: 50vh;">
                <!-- coba cek pakai flex-->
                <div class="col-12 d-flex flex-column justify-content-center">
                    <div class="row g-5 text-center mx-5 d-flex flex-lg-row justify-content-center align-items-center">
                        <!-- Content -->
                        <!-- ganti font bold-->
                        <div class="col-md-3">
                            <h1 class="text-dark text-center" style="font-size: 50px;">500+</h1>
                            <p class="fw-normal text-dark text-center fs-4">Ruangan Tersedia</p>
                        </div>
                        <div class="col-md-3">
                            <h1 class="text-dark text-center" style="font-size: 50px;">10K+</h1>
                            <p class="fw-normal text-dark text-center fs-4">Booking Berhasil</p>
                        </div>
                        <div class="col-md-3">
                            <h1 class="text-dark text-center" style="font-size: 50px;">98%</h1>
                            <p class="fw-normal text-dark text-center fs-4">Kepuasan Pelanggan</p>
                        </div>
                        <div class="col-md-3">
                            <h1 class="text-dark text-center" style="font-size: 50px;">24/7</h1>
                            <p class="fw-normal text-dark text-center fs-4">Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer done, gak diapa-apain juga rapih sendiri mantap lah-->
            <div class="col-12 bg-warning text-dark">
                <div class="row g-5 justify-content-center py-5 mx-5">
                    <div class="col-3">
                        <p class="fw-bold">Tekape Workspace</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                    <!-- reminder ganti ke bold untuk content dibawahnya -->
                    <div class="col-3">
                        <p class="fw-bold">Quick Links</p>
                        <p>Home</p>
                        <p>Rooms</p>
                        <p>About</p>
                        <p>Contact</p>
                    </div>
                    <div class="col-3">
                        <p class="fw-bold">Layanan</p>
                        <p>Meeting Room</p>
                        <p>Workshop Space</p>
                        <p>Event Hall</p>
                        <p>Coworking Space</p>
                    </div>
                    <div class="col-3">
                        <p class="fw-bold">Kontak Kami</p>
                        <p>Email: loremipsum@gm.edu </p>
                        <p>Telepon: +62 123 4567 890</p>
                        <p>Alamat: Jl. Contoh No.123, Kota Ngawi, Negara Jawa</p>
                    </div>
                    <div class="col-12 text-center">
                        &copy; 2024 Tekape Workspace. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer Ends-->
</body>

<!-- need to work and refine more -->
<!-- coloring harus diganti sesuai sama design -->
<!-- font harus diganti sesuai design -->
<!-- hover navbar belum done -->

</html>