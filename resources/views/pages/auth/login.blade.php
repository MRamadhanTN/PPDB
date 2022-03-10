<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="PPDB Online SMKN 1 Banyumas" />
        <meta
            name="keywords"
            content="HTML, CSS, JavaScript, PHP, Pendaftaran"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PPDB Online SMKN 1 Banyumas</title>

        <!-- Favicons -->
        <link href="assets/img/smk.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link
            href="assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/boxicons/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/swiper/swiper-bundle.min.css"
            rel="stylesheet"
        />

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <style>
            html {
                scroll-behavior: smooth;
            }
            section {
                padding: 50px 0;
                overflow: hidden;
            }
            #home {
                width: 100%;
                height: auto;
                position: relative;
            }
            body{
                background: #fff;
            }
            .button:hover {
                color: white !important;
                background: linear-gradient(to right, lightseagreen, steelblue);
                border: 2px solid steelblue;
            }
        </style>
    </head>

    <body>
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-flex align-items-center">
            <div
                class="
                    container
                    d-flex
                    justify-content-center justify-content-md-between
                "
            >
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"
                        ><span
                            class="email-address"
                        ></span
                    ></i>
                    <i
                        class="
                            bi bi-phone
                            d-flex
                            align-items-center
                            ms-4
                            d-none d-lg-inline
                            no-hp
                        "
                        ><span></span
                    ></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a
                        href="#"
                        class="facebook"
                        ><i class="bi bi-facebook"></i
                    ></a>
                    <a
                        href="#"
                        class="instagram"
                        ><i class="bi bi-instagram"></i
                    ></a>
                </div>
            </div>
        </section>

        <!-- ======= Background Image ======= -->
        <div class="d-none d-lg-inline">
            <img
                src="./assets/img/logo-bg.png"
                alt="logo"
                class="position-absolute img-fluid"
                width="1100"
                style="z-index: -1; top: 120px; left: -67vh"
            />
        </div>
        <!-- ======= End Background Image ======= -->

        <!-- WA Live -->
        <a id="Wa" class="wa" title="Chat Live Wa" target="_blank" href="#">
            <img src="{{ asset('./assets/img/wa.png') }}" alt="logo-wa" width="80" />
        </a>
        <!-- End WA Live -->

        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center user-select-none">
            <div
                class="
                    container
                    d-flex
                    align-items-center
                    justify-content-between
                "
            >
                <h1 class="logo">
                    <a href="#">
                        <img
                            src="assets/img/smk.png"
                            alt="Logo-Pondok"
                            width="60"
                            class="img-fluid"
                            id="logo-image"
                        />
                        <span class="text-logo d-none d-sm-inline" id="text-lg">
                            Pondok Informatika Al-Madinah
                        </span>
                    </a>
                </h1>
                <a
                    href="{{ route('landingpage') }}"
                    class="text-decoration-none button-banner"
                    >
                    <button
                    class="
                    btn
                    button
                    bg-transparent
                    rounded-pill
                    px-3
                    py-2
                    "
                    id="button"
                    >
                        Home
                    </button>
                </a>
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Home Section ======= -->
        <section id="home">
            <div class="container" data-aos="zoom-out">
                <div class="d-flex align-items-center justify-content-center">
                    <div
                        class="
                            col-md-5 col-sm-12
                            position-relative
                            login-banner
                        "
                        >
                        <div
                            class="
                                card
                                login-form
                                py-3
                                px-3
                                shadow-lg
                                bg-body
                                overflow-hidden
                            "
                            data-aos="zoom-in"
                        >
                            <div>
                                <img
                                    src="{{ asset('./assets/img/logo-bg.png') }}"
                                    class="position-absolute"
                                    alt="logo"
                                    width="400"
                                    style="
                                        z-index: -0;
                                        top: 157px;
                                        left: -150px;
                                    "
                                />
                            </div>

                            @if (session('sukses-kirim'))
                                <div class="alert alert-success fw-bold">
                                    {{ session('sukses-kirim') }} <br>
                                </div>
                            @endif
                            @if (session('sukses-daftar'))
                                <div class="alert alert-success fw-bold">
                                    {{ session('sukses-daftar') }} <br>
                                </div>
                            @endif

                            <div class="card-body position-relative">
                                <h1
                                    class="
                                        card-title
                                        text-center text-white
                                        mb-5
                                    "
                                >
                                    Login Admin
                                </h1>
                                <div class="card-text">
                                    <form action="{{ route('login-proses') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            @if (session('failed-danger'))
                                                <div class="alert alert-danger alert-dismissible show fade rounded-pill py-2">
                                                    <div class="alert-body fw-bold text-danger">
                                                        {{ session('failed-danger') }}
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-floating">
                                                <input type="email" name="email" required class="form-control rounded-pill px-4" id="floatingInput" placeholder="Email" value="{{ old('email') }}" required>
                                                <label for="floatingInput" class="px-4">Email</label>
                                            </div>

                                            <div class="form-floating d-flex align-items-center mt-4 position-relative password-login">
                                                <input type="password" name="password" class="form-control rounded-pill px-4" id="floatingPassword" placeholder="Password" name="password" required>
                                                <i class="bi bi-eye-slash position-absolute" id="hide" onclick="myFunction()"></i>
                                                <i class="bi bi-eye position-absolute" id="show" onclick="myFunction()"></i>
                                                <label for="floatingPassword" class="px-4">Password</label>
                                            </div>

                                            <br />

                                            <button
                                                class="
                                                    btn
                                                    sign-in
                                                    rounded-pill
                                                    text-uppercase
                                                    px-4
                                                    py-2
                                                    mt-2
                                                    float-end
                                                "
                                            >
                                                Sign In
                                            </button>
                                            <span class="float-start mt-3 mx-2">
                                                <a href="#" class="text-light">Lupa password ?</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Copyright ======= -->
        <div class="copyright text-center bg-transparent my-3" style="color: #6971a0;">
            &copy; {{ date('Y') }} Copyright <strong><span>Pondok Informatika Al-Madinah</span></strong
            >.
        </div>
        <!-- End Home -->

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js"></script>
        <script>
            /* GSAP */

            //Top-Navbar
            gsap.to(".email-address", {
                text: "pondokitalmadinah@gmail.com",
                duration: 2,
                delay: 2,
            });
            gsap.to(".no-hp", {
                text: " 085 725 249 265",
                duration: 2,
                delay: 4,
            });
            gsap.from(".social-links", {
                x: 50,
                opacity: 0,
                duration: 1,
                delay: 6,
            });

            //Navbar
            gsap.from(".logo", {
                x: -100,
                delay: 1.5,
                duration: 1.5,
                opacity: 0,
            });
            gsap.from(".navbar", {
                delay: 2,
                duration: 2,
                opacity: 0,
            });
            gsap.from(".button-banner", {
                duration: 1.5,
                opacity: 0,
                delay: 2.5,
            });
        </script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script>
            // Show Password Icon
            function myFunction() {
                var x = document.getElementById("floatingPassword");
                if (x.type === "password") {
                    x.type = "text";
                    document.getElementById("hide").style.display = "inline-block";
                    document.getElementById("show").style.display = "none";
                } else {
                    x.type = "password";
                    document.getElementById("hide").style.display = "none";
                    document.getElementById("show").style.display = "inline-block";
                }
            }

            //
            window.onscroll = function () {
                scrollFunction();
            }
            function scrollFunction() {
                if (
                    document.body.scrollTop > 100 ||
                    document.documentElement.scrollTop > 100
                ) {
                    document.getElementById("header").style.background = "#3e4095";
                    document.getElementById("logo-image").src = "assets/img/smk.png";
                    document.getElementById("header").style.boxShadow =
                        "0px 2px 15px rgba(0, 0, 0, 0.1)";
                    document.getElementById("text-lg").style.color = "#fff";
                    document.getElementById('button').style.cssText = `
                        color: #fff;
                        border-color: #fff;
                    `;
                } else {
                    document.getElementById("header").style.background = "";
                    document.getElementById("logo-image").src = "assets/img/smk.png";
                    document.getElementById("header").style.boxShadow ="";
                    document.getElementById("text-lg").style.color = "";
                    document.getElementById('button').style.cssText = '';
                }
            }
        </script>
    </body>
</html>
