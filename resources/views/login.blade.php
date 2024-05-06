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
                    <li><a class="nav-link scrollto active" href="{{ route('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('registerp') }}">Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main>
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Login</h2>
                </div>
                <p class="text-center"><a href="{{ route('login') }}" class="rounded-0 text-light shadow btn-info btn ">Login
                        sebagai Admin</a>
                </p>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('plogin') }}" method="post" role="form"
                            class="card border-0 shadow rounded-0 p-4">
                            @csrf
                            <div class="form-group mt-3">
                                <input type="email" class="form-control rounded-0" name="email" id="subject"
                                    placeholder="masukkan email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="form-control rounded-0" name="password" id="subject"
                                    placeholder="masukkan password" required>
                            </div>
                            <p class="mt-3 small">belum punya akun? <a href="{{ route('registerp') }}">register</a></p>
                            <div class="text-center mt-3"><button class="btn shadow btn-info rounded-0 text-light"
                                    type="submit">Login</button></div>
                        </form>
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
