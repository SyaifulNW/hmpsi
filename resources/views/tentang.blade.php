<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HMPSI UDB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-secondary me-2"></small>
                    <small>Jl. Bhayangkara No.55, Tipes, Kec. Serengan, Kota Surakarta, 57154</small>
                </div>

            </div>
            <div class="col-lg-5 px-5 text-end">

                <div class="h-100 d-inline-flex align-items-center">


                    <a class="btn btn-sm-square bg-white text-secondary me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-sm-square bg-white text-secondary me-0" href="https://www.instagram.com/hmp_si.official/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img src="img/logo hmpsi.png" width="50" height="50" alt="icon">
                <h2 class="m-3 text-secondary">HMPSI UDB</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{route('homepage')}}" class="nav-item nav-link ">Home</a>
                    <a href="{{route('tentang')}}" class="nav-item nav-link active">Tentang</a>

                    <a href="{{route('proker')}}" class="nav-item nav-link">Proker</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Divisi</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="{{route('ketua')}}" class="dropdown-item">Ketua & Wakil Ketua</a>
                            <a href="{{route('sekre')}}" class="dropdown-item">Sekretaris</a>
                            <a href="{{route('bendahara')}}" class="dropdown-item">Bendahara</a>
                            <a href="{{route('humas')}}" class="dropdown-item">Humas</a>
                            <a href="{{route('litbang')}}" class="dropdown-item">Litbang</a>
                            <a href="{{route('kominfo')}}" class="dropdown-item">Infokom</a>
                            <a href="{{route('psdm')}}" class="dropdown-item">PSDM</a>
                        </div>
                    </div>
                    <a href="{{route('kontak')}}" class="nav-item nav-link">Kontak</a>
                </div>

            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Visi dan Misi</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Divisi</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Feature Start -->

        <!-- Feature Start -->



        <!-- About Start -->
        <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-0 mx-lg-0">
                </div>
                <div class="col-lg-10 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <!-- <h1 class="display-5 mb-4">Visi & Misi HMPSI</h1> -->
                        </div>
                        <p class="text-sial-20"> <b>Visi :</b></p>
                        <p class="text-sial-20 mb-4 pb-2 "> Terwujudnya organisasi mahasiswa yang prestatif sebagai bentuk eksistensi, keteladanan, dan pencitraan positif HIMASI di masyarakat Indonesia yang berlandaskan Ketuhanan Yang Maha Esa.</p>

                        <div class="text-sial-20 mb-4 pb-2">
                            <p> <b>Misi</b> : </p>
                            <ul>
                                <li>Mengadakan kegiatan kemahasiswaan yang bertujuan untuk meningkatkan kualitas sumber daya manusia di bidang akademis dan non akademis.</li>
                                <li>Memperkenalkan Departemen Sistem Informasi di lingkungan masyarakat luas.</li>
                                <li>Menjalin hubungan dan kerjasama atas dasar kekeluargaan dengan organisasi di dalam atau di luar Jurusan Sistem Informasi.</li>
                            </ul>
                        </div>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Bhayangkara No.55, Tipes, Kec. Serengan, Kota Surakarta, Jawa Tengah 57154</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281902058585</p>

                    <div class="d-flex pt-2">

                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/hmp_si.official/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">HMPSI UDB 2023</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="">Litbang HMP SI UDB</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
