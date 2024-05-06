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
    <header id="header" class="sticky-top ">
        <div class="container d-flex align-items-center justify-content-between position-relative">

            <div class="logo">
                <h1 class="text-light"><a href="{{ route('/') }}"><span>PeTIK</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('plogout') }}">Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main>
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Home Page</h2>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-header">Detail Informasi</div>
                        <div class="card-body">
                            <table cellpadding="1" cellspacing="2">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td class="ps-3">: {{ $_SESSION['id']->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td class="ps-3">: {{ $_SESSION['id']->tempat_lahir .  $_SESSION['id']->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="ps-3">: {{ $_SESSION['id']->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon</td>
                                        <td class="ps-3">: {{ $_SESSION['id']->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td class="ps-3">: {{ $_SESSION['id']->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <td class="ps-3">: {{ $_SESSION['id']->jurusan->nama }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>

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
