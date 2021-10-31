@extends('layout.landing_page')
@section('title', 'PPDB Online')

@section('content')
{{-- Welcome Area Start --}}
<div class="welcome-area" id="welcome">
    {{-- Header Text Start --}}
    <div class="header-text">
        <div class="container-fluid">
            <div class="row mx-5 banner1">
                <div class="d-flex flex-wrap">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div style="height: 390px; color: #5e6073; width: 700px;">
                            <div class="pr-5">
                                <div class="mb-5 judul">
                                    <h2 class="slide1 mb-4"></h2>
                                    <div class="content1">
                                        <p>Aplikasi Penerimaan Peserta Didik Baru <br> Tahun Pelajaran 2021/2022 SMK Negeri 1 Sungai Raya.</p>
                                    </div>
                                    <div class="content2" style="margin-top: -30px">
                                        <p>Pendaftaran Siswa / Siswi Baru Tahun 2022 ini telah dibuka.<br>Silahkan Segera Daftar dan lengkapi Formulir.</p>
                                    </div>
                                    <a href="#regis" class="btn btn-primary text-white alur shadow">Alur Pendaftaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto pl-5 login col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <form action="#" class="shadow">
                            <h2 class="text-center mb-4" style="color: #EFEFEF;">Login Here</h2>
                            <div class="form-floating">
                                <input type="number" class="form-control" style="background: #EFEFEF;" id="floatingInput" placeholder="1111111111" name="NISN">
                                <label for="floatingInput">NISN</label>
                            </div>
                            <label class="mt-2 mb-4" style="font-size: 12px; color: #EFEFEF;">Wajib! Masukan 10 digit NISN</label>

                            <div class="form-floating d-flex">
                                <input type="password" class="form-control" style="background: #EFEFEF;" name="password" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center" style="font-size: 15px; color: #EFEFEF;">
                                    <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
                                </div>
                                <label class="mt-2" style="font-size: 12px; color: #EFEFEF;">Wajib! Masukkan 8-10 karakter</label>
                            </div>
                            <br>
                            <button class="btn btn-primary px-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Header Text End --}}
</div>
{{-- Welcome Area End --}}

{{-- Regis Area --}}
<div class="section" id="regis">
    <div class="container-fluid">
        <div class="row m-auto">
            <div class="d-flex flex-wrap w-100">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <form action="#" class="register-siswa shadow w-100">
                        <div class="header-regis">
                            <h2 class="text-center">Formulir Peserta</h2>
                            <p class="text-center mb-5">( Mohon isi fomulir dengan langkap dan teliti )</p>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="col-md-6 w-100 mb-3">
                                <label for="NISN" class="form-label">NISN</label>
                                <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukan NISN" autofocus>
                                <label style="font-size: 12px;">Wajib! Masukan 10 digit NISN</label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama lengkap">
                            </div>
                        </div>

                        <div class="d-flex flex-wrap">
                            <div class="col-md-6 w-100 mb-4">
                                <label for="place_birth" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="place_birth" name="place_birth" placeholder="Masukan Tempat Lahir" autofocus>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>

                        <div class="mb-3 d-flex flex-wrap">
                            <div class="col-md-6 w-100 mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" password="password" placeholder="Masukan password anda" autofocus>
                                <label style="font-size: 12px;">Mohon diingat password anda!</label>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="confirm-pass" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="confirm-pass" name="confirm-pass" placeholder="Masukan ulang password anda" autofocus>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="col-md-12 justify-content-center d-flex">
                                <button class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                    <div class="alur-image ml-4">
                        <img src="{{ asset('dist/images/alur.png') }}" alt="alur-pendaftaran">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Regis Area End --}}

{{-- Features Big Item Start --}}
<section class="section" id="about">
    <div class="container">
        <h1 class="text-center" data-aos="zoom-in" style="margin-bottom: 100px;">Statistik Pendaftar</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
                <div class="features-item">
                    <div class="features-icon">
                        <h4>Total Pendaftar</h4>
                        <h1 id="count1">500</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="features-item">
                    <div class="features-icon">
                        <h4>Jumlah Laki-Laki</h4>
                        <h1 id="count2">500</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="features-item">
                    <div class="features-icon">
                        <h4>Jumlah Perempuan</h4>
                        <h1 id="count3">500</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="features-item">
                    <div class="features-icon">
                        <h4>Quota Penerimaan</h4>
                        <h1 id="count4">500</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<div class="left-image-decor"></div>

<!-- ***** Features Big Item Start ***** -->
<section class="section" id="promotion">
    <div class="container">
        <div class="row">
            <h1 class="text-center" data-aos="zoom-in" style="margin-bottom: 100px;">Pengumuman</h1>
            <div class="mb-5 col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                <div class="pengumuman pb-4">
                    <ul>
                        <h3 class="text-center text-white bg-primary py-3 mb-5" style="border-radius: 0 0 100px 100px;">Pengumuman</h3>

                        {{-- Line --}}
                        <div class="line" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"></div>

                        <li data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="d-flex align-items-center">
                                <h3 class="bg-primary text-white p-3 rounded-circle" style="margin-top: -80px;"></h3>
                                <div class="ml-4">
                                    <h3>Pengumuman</h3>
                                    <h6>Pengumuman Selelsi Berkas tanggal 25 Juni 2021 - 28 Juni 2021.</h6>
                                    <p>2021-06-10 06:19:34</p>
                                </div>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="d-flex align-items-center">
                                <h3 class="bg-primary text-white p-3 rounded-circle" style="margin-top: -60px;"></h3>
                                <div class="ml-4">
                                    <h3>Penting</h3>
                                    <h6>Berkas yang di upload adalah berkas asli.</h6>
                                    <p>2021-06-10 06:19:34</p>
                                </div>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="d-flex align-items-center">
                                <h3 class="bg-primary text-white p-3 rounded-circle" style="margin-top: -60px;"></h3>
                                <div class="ml-4">
                                    <h3>Test</h3>
                                    <h6>Test Seleksi</h6>
                                    <p>2021-06-10 06:19:34</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix px-5 mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <ul>
                    <h3 class="text-center text-white bg-primary py-3" style="border-radius: 0 0 100px 100px;">Cara Daftar</h3>

                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" class="mt-4">
                        <div class="text d-flex align-items-center">
                            <h1 class="bg-primary text-white px-3 py-1 rounded-circle" style="margin-top: -40px;">1</h1>
                            <div class="ml-4">
                                <h4 style="color: #52535e">Calon Siswa mendaftar di web pendaftaran.</h4>
                                <a href="#regis" class="btn bg-primary px-5 text-white">Daftar Segera</a>
                            </div>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                        <div class="text d-flex align-items-center">
                            <h1 class="bg-primary text-white px-3 py-1 rounded-circle" style="margin-top: -70px;">2</h1>
                            <div class="ml-4">
                                <h4 style="color: #52535e">Jika selesai pendaftaran silahkan login dengan username dan password saat pendaftaran.</h4>
                                <a href="#welcome" class="btn bg-success text-white px-5">Klik Disini</a>
                            </div>
                        </div>
                    </li>
                    <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s" class="mb-5">
                        <div class="text d-flex align-items-center">
                            <h1 class="bg-primary text-white px-3 py-1 rounded-circle">3</h1>
                            <div class="ml-4">
                                <h4 style="color: #52535e">Lengkapi Formulir yang diberikan dengan data yang benar.</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->
@endsection

@push('afterScript')
    <script>
        // counter data statistik
        $('#count1').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                $this.text(Math.ceil(this.Counter));
                }
            });
        });
        $('#count2').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                $this.text(Math.ceil(this.Counter));
                }
            });
        });
        $('#count3').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                $this.text(Math.ceil(this.Counter));
                }
            });
        });
        $('#count4').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                $this.text(Math.ceil(this.Counter));
                }
            });
        });
    </script>

    {{-- AOS --}}
    <script>
        AOS.init();
    </script>

    {{-- Gaps --}}
    <script>
        gsap.registerPlugin(TextPlugin);

        // navbar
        gsap.from('.main-nav', {duration: 0.5, opacity: 0, y: -50, delay: 1.5, ease: 'back',});

        // Login
        gsap.from('.login', {duration: 0.5, opacity: 0, delay:2.5});

        // Header-text
        gsap.to('.slide1', {duration: 4, delay: 2, text: 'Selamat Datang di Web PPDB Online <br> SMK Negeri 1 Sungai Raya' });
        gsap.from('.content1', {duration: 0.5, opacity: 0, delay: 5.5, x: 50});
        gsap.from('.content2', {duration: 0.5, opacity: 0, delay: 6, x: 50});
        gsap.from('.alur', {duration: 0.5, opacity: 0, delay: 6.5, y: 50, ease: 'back'});

        // Footer
        gsap.to('.help', {duration: 1.8, delay: 1.5, text: 'How Can<em>&nbsp;We&nbsp;</em>Help ?' });
        gsap.from('.content-help1', {duration: 0.5, opacity: 0, delay:4, x: 50});
        gsap.from('.content-help2', {duration: 0.5, opacity: 0, delay:5, x: 50});
        gsap.from('.form-contact', {duration: 1, opacity: 0, delay: 8.5});
        gsap.from('#fb', {duration: 0.5, opacity: 0, delay: 6.5, x: 50});
        gsap.from('#tw', {duration: 0.5, opacity: 0, delay: 7, x: 50});
        gsap.from('#ins', {duration: 0.5, opacity: 0, delay: 7.5, x: 50});
        gsap.from('#wa', {duration: 0.5, opacity: 0, delay: 8, x: 50});
    </script>
@endpush
