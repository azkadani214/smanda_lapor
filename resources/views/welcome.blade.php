<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Swara Cloven - SMAN 1 Pandaan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt=""></a>

            <nav id="navbar" class="navbar">
                <ul class="me-3">
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#how">Tata Cara</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                    <div>
                        <!-- Tombol "Primary" -->
                        <button type="button" class="btn btn-primary me-2">
                            <a href="{{ url('login') }}" class="text-white">Masuk</a>
                        </button>

                        <button type="button" class="btn btn-outline-primary">
                            <a href="{{ url('register') }}" class="text-primary">Daftar</a>
                        </button>

                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>


            </nav><!-- .navbar -->
            <!-- Kontainer untuk tombol-tombol -->

        </div>
    </header><!-- End Header -->




    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Selamat Datang <span>Swara Cloven</span></h1>
            <h2>Laman Pengaduan Daring Kelas XI E SMANDA</h2>
            <div class="d-flex">
                <a href="{{ url('login') }}" class="btn-get-started scrollto">Lapor Sekarang!</a>
                <a href="https://www.youtube.com/watch?v=vIpMSVDNANQ&t=4s" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Video Kami</span></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="how" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-pencil-square"></i></div>
                            <h4 class="title"><a href="">Tulis Laporan</a></h4>
                            <p class="description">Langkah pertama adalah menulis laporan pengaduan secara rinci dan
                                jelas</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-clipboard2-check-fill"></i></div>
                            <h4 class="title"><a href="">Proses Verifikasi</a></h4>
                            <p class="description">Tim akan memverifikasi keaslian dan keakuratan informasi yang
                                disampaikan</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-person-raised-hand"></i></div>
                            <h4 class="title"><a href="">Tindak Lanjut</a></h4>
                            <p class="description">Laporan akan diteruskan ke pihak terkait dan ditindaklanjuti</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-yelp"></i></div>
                            <h4 class="title"><a href="">Evaluasi</a></h4>
                            <p class="description">Mengevaluasi efektivitas langkah-langkah penyelesaian dan
                                mengidentifikasi area yang memerlukan perbaikan</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                    <p>Laman Pengaduan Daring SMAN 1 Pandaan</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">

                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apakah ada
                                    batasan waktu untuk mengirimkan laporan pengaduan? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>Tidak ada batasan waktu yang ketat untuk mengirimkan laporan pengaduan. Namun,
                                        kami mendorong Anda untuk segera melaporkan masalah agar tindakan dapat diambil
                                        dengan cepat.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana
                                    cara mengetahui apakah laporan pengaduan saya telah diterima? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>Ya, anda bisa memantau pengaduan Anda di dashboard pengguna </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bagaimana
                                    cara saya mengirimkan laporan pengaduan? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>Anda dapat mengirimkan laporan pengaduan melalui formulir online yang tersedia di
                                        website kami. Isi formulir dengan detail dan jelas untuk memastikan informasi
                                        Anda tersampaikan dengan baik.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Siapa yang
                                    akan menangani laporan pengaduan saya?<i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>Laporan Anda akan ditindaklnjuti oleh pihak terkait sesuai dengan klasifikasi
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apakah
                                    identitas saya akan dirahasiakan saat saya melaporkan pengaduan? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Identitas Anda hanya akan diketahui oleh Admin yang terikat dengan aturan untuk
                                        tidak menyebar data pengguna atau pelapor. </p>
                                </div>
                            </li>

                            <li>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                        <div class="social-links mt-3">

                            <a href="https://www.instagram.com/clovensmanda/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/@sman1pandaan-official700" class="youtube"><i
                                    class="bi bi-youtube"></i></a>


                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
