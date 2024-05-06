<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PeTIK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing') }}/assets/img/koran.png" rel="icon">
    <link href="{{ asset('landing') }}/assets/img/koran.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing') }}/assets/css/style.css" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">

            <div class="logo">
                <h1 class="text-light"><a href="{{ route('/') }}"><span>PeTIK</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#jurusan">Jurusan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('loginp') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Welcome to PeTIK</h1>
            <h2>Mempersiapkan tenaga IT proffesional yang berkarakter</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section>

    <main id="main">

        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="content">
                            <h3>Tentang PeTIK</h3>
                            <p>
                                Pesantren Teknologi Informasi dan Komunikasi (PeTIK) bermula dari keberadaan Lembaga
                                Amil Zakat Infaq dan Shodaqoh PT PLN (Persero) Kantor Pusat (LAZIS PT PLN (Persero)
                                Kantor Pusat) yang dibentuk berdasarkan Keputusan Direksi Nomor 132.K/DIR/2006 Tanggal
                                11 September 2006 untuk mengelola dana zakat, infaq/ shodaqoh pegawai PLN Pusat.
                            </p>
                            <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>PROGRAMMING
                                    </h4>
                                    <p>Kompetensi ini diajarkan pada jurusan pengembangan perangkat lunak</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>TAHFIDZ QURAN</h4>
                                    <p>Mahasantri menuntaskan hafalan Al-Quran sebanyak 2 Juz dalam 1 tahun.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>JUNIOR SYSTEM DAN NETWORK ADMINISTRATOR</h4>
                                    <p>Kompetensi ini diajarkan pada jurusanpengelolaan sistem dan jaringan.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-shield"></i>
                                    <h4>KARAKTER</h4>
                                    <p>Mahasantri menguasai 6 nilai karakter Mahasantri Pesantren PeTIK.</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <section id="counts" class="counts  section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Alumni</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Mahasantri</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $jurusan->count() }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Jurusan</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $peserta->count() }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Pendaftar</strong></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="jurusan" class="services ">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Jurusan</h2>
                    <p>Jurusan jurusan yang tersedia di PeTIK</p>
                </div>

                <div class="row ">
                    @foreach ($jurusan as $j)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-4">
                            <div class="icon-box" data-aos="fade-up">
                                <div class="icon"><i class="bx bxs-book-bookmark"></i></div>
                                <h4 class="title"><a href="">{{ $j->nama }}</a></h4>
                                <p class="description">{{ $j->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section><!-- End Testimonials Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>petik@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>0812-9554-2914</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126881.77022911832!2d106.695068453664!3d-6.3868627493564425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK%20(Pesantren%20Teknologi%20Informasi%20dan%20Komunikasi)%20Program%20Kuliah%20IT%20Gratis%20Binaan%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1703821576220!5m2!1sid!2sid"
                            width="600" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>PeTIK</h3>
                            <p class="pb-3"><em>Mencetak tenaga IT professional yang berarakter</em></p>
                            <p>
                                Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas<br>
                                Kota Depok, Jawa Barat<br><br>
                                <strong>Phone:</strong> 0812-9554-2914<br>
                                <strong>Email:</strong> petik@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col footer-newsletter">
                        <div class="copyright">
                            &copy; Copyright <strong><span>PeTIK</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            Developed by Badrr
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('landing') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('landing') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('landing') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('landing') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('landing') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing') }}/assets/js/main.js"></script>

</body>

</html>
