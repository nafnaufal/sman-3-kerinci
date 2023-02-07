<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMAN 3 Kerinci</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .carousel .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            position: absolute;
            object-fit: cover;
            top: 0;
            left: 0;
            min-height: 500px;
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <header>
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark text-light px-0 py-2">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center">
                        <span class="far fa-envelope me-2"></span>
                        <span>sman3krc@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center mx-n2">
                        <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
            <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h1 class="m-0">SMAN 3 Kerinci</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="profil#" class="nav-link dropdown-toggle" data-bs-hover="dropdown">Profil</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="profil#identitas" class="dropdown-item">Identitas Sekolah</a>
                            <a href="profil#visimisi" class="dropdown-item">Visi Misi</a>
                            <a href="profil#sejarah" class="dropdown-item">Sejarah</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="foto#" class="dropdown-item">Foto</a>
                            <a href="video#" class="dropdown-item">Video</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="pengumuman#" class="dropdown-item">Pengumuman</a>
                            <a href="agenda#" class="dropdown-item">Agenda</a>
                            <!-- <a href="pengumuman.html" class="dropdown-item">Pengumuman</a> -->
                        </div>
                    </div>
                    <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                    <a href="guru#" class="nav-item nav-link active">Tenaga Kependidikan</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>

    <main>
        @yield('container')
    </main>

    <footer>
        <!-- Facts Start -->

        @include('layouts.partials.facts')
        <!-- Facts End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="text-white mb-4">Hubungi Kami</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Pulau Tengah No.Desa, Limok
                            Manaih,
                            Kec. Keliling Danau, Kabupaten Kerinci, Jambi</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@email.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h4 class="text-white mb-4">Menu</h4>
                        <a class="btn btn-link" href="">Beranda</a>
                        <a class="btn btn-link" href="">Foto</a>
                        <a class="btn btn-link" href="">Video</a>
                        <a class="btn btn-link" href="">Pengumuman</a>
                        <a class="btn btn-link" href="">Blog</a>
                        <a class="btn btn-link" href="">Guru</a>
                        <a class="btn btn-link" href="">Profil</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Naufal Anbial Falah</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed
                        By
                        <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </footer>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
