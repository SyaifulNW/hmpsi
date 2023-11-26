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
</head>

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
                    <a href="{{route('tentang')}}" class="nav-item nav-link ">Tentang</a>

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
                <h1 class="display-3 text-white mb-3 animated slideInDown">Proker</h1>
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
                            <h4 class="display-5 mb-4">Program Kerja HMPSI</h4>
                        </div>
                        <p class="text-kanankiri mb-4 pb-2">Proker adalah singkatan dari "Program Kerja." Dalam konteks organisasi atau lembaga, proker merujuk pada rencana kegiatan atau program yang akan dilakukan dalam suatu periode tertentu, biasanya dalam satu tahun. Proker berfungsi sebagai panduan atau acuan bagi anggota organisasi untuk melaksanakan kegiatan-kegiatan yang telah direncanakan.<br><br>

                            Program kerja biasanya disusun berdasarkan tujuan organisasi dan kebutuhan anggotanya. Proses penyusunan proker melibatkan identifikasi masalah, analisis kebutuhan, penetapan sasaran atau target, serta perencanaan kegiatan dan anggaran yang akan digunakan.

                            Proker dapat berupa berbagai jenis kegiatan, seperti seminar, workshop, pelatihan, kegiatan sosial, kampanye, pertemuan rutin, dan lain sebagainya. Setiap kegiatan dalam proker memiliki tujuan dan target khusus yang ingin dicapai.

                            Dengan adanya proker, organisasi dapat lebih terstruktur dalam pelaksanaan kegiatannya dan memiliki panduan yang jelas untuk mencapai tujuan yang telah ditetapkan. Selain itu, proker juga memudahkan pengawasan dan evaluasi atas pencapaian target kegiatan dan efektivitas organisasi secara keseluruhan.<br><br>

                            Berikut Rencana Program Kerja HMPSI Angkatan 2022/2023 :
                        </p>

                        <table>
                            <tr>
                                <th>No.</th>
                                <th>Nama Proker</th>
                                <th>Divisi</th>
                                <th>Keterangan</th>
                            </tr>
                            <tr>
                                <td class="text-nomer">1.</td>
                                <td>Mubes Awal</td>
                                <td>Ketua & Wakil Ketua</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">2.</td>
                                <td>Mubes Akhir</td>
                                <td>Ketua & Wakil Ketua</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">3.</td>
                                <td>Rapat Kerja</td>
                                <td>Ketua & Wakil Ketua</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">4.</td>
                                <td>Rapat Rutin Bulanan</td>
                                <td>Ketua & Wakil Ketua</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">5.</td>
                                <td>Sharing Calon Pengurus Baru HMP SI</td>
                                <td>Ketua & Wakil Ketua</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">6.</td>
                                <td>Pengeluaran Nomor Administrasi</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">7.</td>
                                <td>Pembuatan Notulen dan Daftar Kehadiran Pengurus pada Kegiatan Rapat</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">8.</td>
                                <td>Membuat Matriks Kegiatan</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">9.</td>
                                <td>Pengarsipan Surat Masuk,Surat Keluar,Proposal,dan LPJ</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">10.</td>
                                <td>Membuat Struktur Kepengurusan</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">11.</td>
                                <td>Pembuatan Surat,proposal & LPJ.</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">12.</td>
                                <td>Pengadaan alat alat kesekretariatan.</td>
                                <td>Sekretaris</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">13.</td>
                                <td>Mengelola, mengatur, dan mendistribusikan keseluruhan dana HMPSI</td>
                                <td>Bendahara</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">14.</td>
                                <td>Membuat laporan keuangan</td>
                                <td>Bendahara</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">15.</td>
                                <td>Kas</td>
                                <td>Bendahara</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">16.</td>
                                <td>Pengelolaan Media Sosial (Instagram, TikTok & YouTube)</td>
                                <td>Infokom</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">17.</td>
                                <td>Dokumentasi Kegiatan Himasi Periode 2022/2023</td>
                                <td>Infokom</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">18.</td>
                                <td>Postingan Memperingati Hari Besar</td>
                                <td>Infokom</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">19.</td>
                                <td>Konten Grafis Informatif</td>
                                <td>Infokom</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">20.</td>
                                <td>Mengurus Perizinan</td>
                                <td>Humas</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">21.</td>
                                <td>Evaluasi kinerja divisi</td>
                                <td>Humas</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">22.</td>
                                <td>Evaluasi kinerja HMPSI</td>
                                <td>Humas</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">23.</td>
                                <td>Sharing dengan ORMAWA dalam lingkup kampus atau dengan kampus lain (khusus SI)</td>
                                <td>Humas</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">24.</td>
                                <td>Oprec</td>
                                <td>PSDM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">25.</td>
                                <td>Makrab</td>
                                <td>PSDM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">26.</td>
                                <td>Seminar</td>
                                <td>PSDM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">27.</td>
                                <td>Bagi Takjil dan Bukber</td>
                                <td>PSDM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">28.</td>
                                <td>Belajar bersama mahasiswa baru Sistem Informasi</td>
                                <td>Litbang</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">28.</td>
                                <td>Webinar Nasional Data Science</td>
                                <td>Litbang</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-nomer">28.</td>
                                <td>Pembuatan Website HMP SI</td>
                                <td>Litbang</td>
                                <td></td>
                            </tr>

                        </table>
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
