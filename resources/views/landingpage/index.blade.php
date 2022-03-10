{{-- @php
    $tahun_ajaran = App\Models\AcademyYear::where('is_active', true)->orderBy('id','desc')->first();
    $users = App\Models\BiodataOne::whereHas('academy_year', function($query){
        $query->where('is_active', true);
    })->count();
    $userregister = App\Models\BiodataTwo::whereHas('user')->whereHas('academy_year', function($query){
        $query->where('is_active', true);
    })->get();
    $gelombang = App\Models\Stage::whereHas('academy_year', function($query){
        $query->where('is_active', true);
    })->orderBy('id', 'desc')->pluck('name')->first();
    $informations = App\Models\Schdule::orderBy('id', 'desc')->limit(6)->get();
    $qnas = App\Models\Qna::get();
@endphp --}}
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
        <script>
            $(document).ready(function () {
                $("#birth_date").picky();
            });
        </script>
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
                    <i class="bi bi-envelope d-flex align-items-center"><span class="email-address"></span></i>
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
                        href="https://www.facebook.com/SMK-N-1-Banyumas-679028082225964"
                        ><i class="bi bi-facebook"></i
                    ></a>
                    <a
                        href="https://www.instagram.com/smkn1banyumas/"
                        class="instagram"
                        ><i class="bi bi-instagram"></i
                    ></a>
                </div>
            </div>
        </section>


        <!-- WA Live -->
        <a id="Wa" class="wa" title="Chat Live Wa" target="_blank" href="#">
            <img src="./assets/img/wa.png" alt="logo-wa" width="80" />
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
                            alt="Logo-PPDB"
                            width="60"
                            class="img-fluid"
                            id="logo-image"
                        />
                        <span class="text-logo d-none d-sm-inline" id="text-lg">
                            PPDB Online
                        </span>
                    </a>
                </h1>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li>
                            <a
                                class="nav-link scrollto active"
                                href="#home"
                                id="link1"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                class="nav-link scrollto"
                                href="#regis"
                                id="link2"
                                >Daftar</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#announce" id="link3"
                                >Pengumuman</a
                            >
                        </li>
                        <li>
                            <a
                                class="nav-link scrollto"
                                href="#info"
                                id="link4"
                                >Informasi</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#qna" id="link6"
                                >Q&A</a
                            >
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#about" id="link5"
                                >About Us</a
                            >
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- End Navbar -->
            </div>
        </header>
        <!-- ======= End Header ======= -->

        <!-- ======= Home Section ======= -->
        <section id="home" class="d-flex align-items-center">
            <div class="container" data-aos="zoom-out">
                {{-- @if (session('success-create'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body fw-bold">
                                {{ session('success-create') }}
                            </div>
                        </div>
                    @elseif(session('success-danger'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body fw-bold">
                                {{ session('success-danger') }}
                            </div>
                        </div>
                    @elseif(session('success-edit'))
                        <div class="alert alert-warning alert-dismissible show fade">
                            <div class="alert-body fw-bold">
                                {{ session('success-edit') }}
                            </div>
                        </div>
                    @else
                @endif --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-5 mb-lg-0 mb-md-0">
                        <h3 class="fw-bold mb-4 banner-title">Selamat Datang di Web PPDB Online
                        SMK Negeri 1 Banyumas</h3>

                        <div class="paragraf-text mb-5">
                            <p class="sub-banner1">
                                Web Penerimaan Peserta Didik Baru <br />
                                Tahun Pelajaran 2022/2023 <br />
                                SMK Negeri 1 Banyumas.
                            </p>
                            <p class="pt-2 sub-banner2">
                                Pendaftaran Siswa Baru telah dibuka. <br />
                                Silahkan Segera Daftarkan dan Lengkapi Formulir
                                Pendaftaran.
                            </p>
                        </div>

                        <div class="mt-5">
                            <a
                                href="#alur"
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
                                >
                                    Alur Pendaftaran
                                </button>
                            </a>
                            <span class="mx-2"></span>
                            <a
                                href="#"
                                class="text-decoration-none button-banner2"
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
                                >
                                    Lebih Lanjut
                                </button>
                            </a>
                        </div>
                    </div>
                    <div
                        class="
                            col-md-6 col-sm-12
                            position-relative
                            login-banner
                            mb-5 mb-lg-0
                        "
                    >
                        <!-- Animate -->
                        <img
                            src="./assets/img/people.png"
                            alt="people"
                            class="
                                position-absolute
                                d-none d-xl-inline
                                img-fluid
                            "
                            width="180"
                        />
                        <canvas id="canvas" width="100" height="100" class="d-none d-xl-inline"></canvas>

                        <div
                            class="
                                card
                                login-form
                                py-3
                                px-3
                                shadow-lg
                                bg-body
                                float-md-end
                                overflow-hidden
                            "
                            data-aos="zoom-in"
                        >
                            <div>
                                <img
                                    src="./assets/logo-bg.png"
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

                            <div class="card-body">
                                <h1
                                    class="
                                        card-title
                                        text-center text-white
                                        mb-5
                                    "
                                >
                                    Login Here
                                </h1>
                                <div class="card-text">
                                    <form action="{{ route('login-proses') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            @if (session('failed-login'))
                                                <div class="alert alert-danger alert-dismissible show fade rounded-pill py-2">
                                                    <div class="alert-body fw-bold text-danger">
                                                        {{ session('failed-login') }}
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-floating">
                                                <input type="number" name="nisn_login" required class="form-control rounded-pill px-4" id="floatingInput" placeholder="Masukkan NISN" value="{{ old('nisn_login') }}" required>
                                                <label for="floatingInput" class="px-4">NISN</label>
                                            </div>

                                            <div class="form-floating d-flex align-items-center mt-4 position-relative password-login">
                                                <input type="password" name="password" class="form-control rounded-pill px-4" id="floatingPassword" placeholder="Masukkan Password" name="password" required>
                                                <i class="bi bi-eye-slash position-absolute" id="hide" onclick="myFunction()"></i>
                                                <i class="bi bi-eye position-absolute" id="show" onclick="myFunction()"></i>
                                                <label for="floatingPassword" class="px-4">Password</label>
                                            </div>

                                            {{-- <div
                                                class="
                                                    d-flex
                                                    justify-content-between
                                                    mt-2
                                                "
                                            >
                                                <div
                                                    class="
                                                        d-flex
                                                        align-items-center
                                                        px-3
                                                    "
                                                    style="
                                                        font-size: 12px;
                                                        color: #fff;
                                                        z-index: 1;
                                                    "
                                                >
                                                    <input
                                                        type="checkbox"
                                                        onclick="myFunction()"
                                                    />&nbsp; Show Password
                                                </div>
                                            </div> --}}
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
                                            <span class="float-start mx-2 mt-3">
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
        <!-- End Home -->

        <main id="main">
            <!-- Section Regis -->
            <section id="regis" class="d-flex align-items-center">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div
                            class="
                                col-md-6 col-sm-12
                                position-relative
                                login-banner
                            "
                            id="regis-form"
                        >
                            <div
                                class="
                                    card
                                    login-form
                                    py-4
                                    px-2
                                    shadow-lg
                                    bg-body
                                "
                                data-aos="fade-right"
                            >
                                <div class="card-body">
                                    <h1
                                        class="
                                            card-title
                                            text-center text-white
                                        "
                                    >
                                        Formulir Peserta
                                    </h1>
                                    <h6
                                        class="
                                            mb-5
                                            card-subtitle
                                            text-center text-white
                                        "
                                        style="font-size: 12px"
                                    >
                                        Mohon isi formulir pendaftaran dengan
                                        lengkap dan benar
                                    </h6>
                                    <div class="card-text">
                                        <form action="#" method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="form-group">
                                                <div class="row">
                                                    <div
                                                        class="
                                                            mb-4
                                                            col-lg-6 col-sm-12
                                                        "
                                                    >
                                                        <label
                                                            for="nisn"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >NISN</label
                                                        >
                                                        <input
                                                            type="number"
                                                            class="
                                                                form-control
                                                                form-control-lg
                                                                rounded-pill
                                                                {{-- @error('nisn_login') is-invalid @enderror --}}
                                                            "
                                                            style="
                                                                font-size: 15px;
                                                            "
                                                            id="nisn_login"
                                                            name="nisn_login"
                                                            placeholder="Masukkan NISN"
                                                            required
                                                            {{-- @error('nisn_login') is-invalid @enderror --}}
                                                            value="{{ old('nisn_login') }}"
                                                        />
                                                        {{-- @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                    <div
                                                        class="
                                                            mb-4
                                                            col-lg-6 col-sm-12
                                                        "
                                                        >
                                                        <label
                                                            for="full_name"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >Nama Lengkap</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="
                                                                form-control
                                                                form-control-lg
                                                                rounded-pill
                                                                {{-- @error('full_name') is-invalid @enderror --}}
                                                            "
                                                            style="
                                                                font-size: 15px;
                                                            "
                                                            id="full_name"
                                                            name="full_name"
                                                            placeholder="Masukkan Nama Lengkap"
                                                            required
                                                            {{-- @error('full_name') is-invalid @enderror --}}
                                                            value="{{ old('full_name') }}"
                                                        />
                                                        {{-- @error('full_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="
                                                            mb-4
                                                            col-lg-6 col-sm-12
                                                        "
                                                    >
                                                        <label
                                                            for="birth_date"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >Tanggal
                                                            Lahir
                                                            </label
                                                        >
                                                        <div class="d-flex">
                                                            <select class="form-select rounded-pill"
                                                            name="day" id="dobday"required
                                                            style="
                                                                font-size: 15px;
                                                                color: #145560;
                                                            "></select>
                                                            <select class="form-select rounded-pill" name="month" id="dobmonth" required style="
                                                                font-size: 15px;
                                                                color: #145560;
                                                            "></select>
                                                            <select class="form-select rounded-pill" name="year" id="dobyear" required style="
                                                                font-size: 15px;
                                                                color: #145560;
                                                            "></select>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="
                                                            mb-4
                                                            col-lg-6 col-sm-12
                                                        "
                                                        >
                                                        <label
                                                            for="track"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >Jalur</label
                                                        >
                                                        <select
                                                            class="
                                                                form-select
                                                                form-select-lg
                                                                rounded-pill
                                                                {{-- @error('track') is-invalid @enderror --}}
                                                            "
                                                            style="
                                                                font-size: 15px;
                                                                color: #145560;
                                                            "
                                                            aria-label="track"
                                                            id="track"
                                                            name="track"
                                                            required
                                                        >
                                                            <option selected disabled>
                                                                -- Pilih --
                                                            </option>
                                                            <option
                                                                value="reguler"
                                                            >
                                                                Reguler
                                                            </option>
                                                            <option
                                                                value="prestasi"
                                                            >
                                                                Prestasi
                                                            </option>
                                                            <option
                                                                value="kurang-mampu"
                                                            >
                                                                Kurang Mampu
                                                            </option>
                                                        </select>
                                                        {{-- @error('track')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="
                                                            mb-4
                                                            col-lg-12 col-sm-12
                                                        "
                                                    >
                                                        <label
                                                            for="no_wa"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >No Whatsapp
                                                            <br>
                                                            <small style="font-size: 12px;">* Mohon isi dengan nomor Whatsapp aktif yang dapat kami hubungi!.</small>
                                                            </label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="
                                                                form-control
                                                                form-control-lg
                                                                rounded-pill
                                                                {{-- @error('no_wa') is-invalid @enderror --}}
                                                            "
                                                            maxlength="15"
                                                            style="
                                                                font-size: 15px;
                                                            "
                                                            id="no_wa"
                                                            name="no_wa"
                                                            placeholder="Masukkan No Whatsapp"
                                                            required
                                                            {{-- @error('no_wa') is-invalid @enderror --}}
                                                            value="{{ old('no_wa') }}"
                                                        />
                                                        {{-- @error('no_wa')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div
                                                        class="
                                                            mb-4
                                                            col-lg-6 col-sm-12
                                                        "
                                                    >
                                                        <label
                                                            for="password"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >Password
                                                            <br>
                                                            <small style="font-size: 12px;">min 6 karakter max 20 karakter.</small>
                                                            </label
                                                        >
                                                        <input
                                                            type="password"
                                                            class="
                                                                form-control
                                                                form-control-lg
                                                                rounded-pill
                                                                {{-- @error('password') is-invalid @enderror --}}
                                                            "
                                                            style="
                                                                font-size: 15px;
                                                            "
                                                            id="password"
                                                            name="password"
                                                            placeholder="Masukkan Password"
                                                            required
                                                            {{-- @error('password') is-invalid @enderror --}}
                                                        />
                                                        {{-- @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                    <div
                                                        class="
                                                            col-lg-6 col-sm-12
                                                        "
                                                    >
                                                        <label
                                                            for="confirm_password"
                                                            class="
                                                                form-label
                                                                text-white
                                                                px-3
                                                            "
                                                            >Konfirmasi
                                                            Password
                                                            <br>
                                                            <small style="font-size: 12px;">min 6 karakter max 20 karakter.</small>
                                                            </label
                                                        >
                                                        <input
                                                            type="password"
                                                            class="
                                                                form-control
                                                                form-control-lg
                                                                rounded-pill
                                                                {{-- @error('password_confirmation') is-invalid @enderror --}}
                                                            "
                                                            style="
                                                                font-size: 15px;
                                                                color: #145560;
                                                            "
                                                            id="confirm_password"
                                                            name="password_confirmation"
                                                            placeholder="Masukkan Ulang Password"
                                                            required
                                                            {{-- @error('password_confirmation') is-invalid @enderror --}}
                                                        />
                                                        {{-- @error('password_confirmation')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                        <div
                                                            class="
                                                                d-flex
                                                                justify-content-between
                                                                showpass
                                                                position-relative
                                                            "
                                                        >
                                                            <div
                                                                class="
                                                                    d-flex
                                                                    px-2
                                                                    pt-1
                                                                    position-absolute
                                                                "
                                                                style="
                                                                    font-size: 15px;
                                                                    color: #efefef;
                                                                "
                                                            >
                                                                <input
                                                                id="pass"
                                                                type="checkbox"
                                                                onclick="showFunction()"
                                                                class="form-check-input"
                                                                />
                                                                <label for="pass" class="form-check-label ms-2">Show Password</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br />
                                                {{-- @if (is_null($tahun_ajaran))
                                                    <button
                                                    type="submit"
                                                    class="btn
                                                    sign-in
                                                    rounded-pill
                                                    text-uppercase
                                                    px-4
                                                    py-2
                                                    col-12" disabled tabindex="4">
                                                        Pendaftaran belum di buka
                                                    </button>
                                                @else --}}
                                                    <button
                                                    type="submit"
                                                    class="btn
                                                    sign-in
                                                    rounded-pill
                                                    text-uppercase
                                                    mt-4
                                                    mt-lg-0
                                                    mt-xl-0
                                                    mt-xxl-0
                                                    px-4
                                                    py-2
                                                    col-12" tabindex="4">
                                                        Daftar
                                                    </button>
                                                {{-- @endif --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="
                                col-md-6 col-sm-12
                                d-flex
                                align-items-center
                                justify-content-around
                                position-relative
                            "
                            id="alur"
                        >
                            <div class="position-relative">
                                <p
                                    class="
                                        position-absolute
                                        text-center
                                        alur-text
                                    "
                                >
                                    1 <br />
                                    Daftar Akun dan Mengisi Formulir Pendaftaran
                                </p>
                                <img
                                    src="assets/img/daftar.png"
                                    alt="daftar"
                                    width="90px"
                                    class="img-fluid alur_image_1"
                                />
                                <img
                                    src="assets/img/line_1.png"
                                    alt="daftar"
                                    width="115px"
                                    class="
                                        position-absolute
                                        line-1
                                        d-none d-lg-inline
                                    "
                                    style="left: -13px; bottom: -15px"
                                />
                            </div>
                            <div class="position-relative">
                                <img
                                    src="assets/img/tes.png"
                                    alt="tes"
                                    width="90px"
                                    class="img-fluid alur_image_2"
                                />
                                <img
                                    src="assets/img/line_2.png"
                                    alt="daftar"
                                    width="115px"
                                    class="
                                        position-absolute
                                        line-2
                                        d-none d-lg-inline
                                    "
                                    style="left: -13px; top: -15px"
                                />
                                <p
                                    class="
                                        position-absolute
                                        text-center
                                        alur-text2
                                    "
                                >
                                    2 <br />
                                    Melakukan Tes IQ dan Tes Kepribadian
                                </p>
                            </div>
                            <div class="position-relative">
                                <p
                                    class="
                                        position-absolute
                                        text-center
                                        alur-text3
                                    "
                                >
                                    3 <br />
                                    Selanjutnya Membuat dan Upload Video
                                </p>
                                <img
                                    src="assets/img/video.png"
                                    alt="daftar"
                                    width="90px"
                                    class="img-fluid alur_image_3"
                                />
                                <img
                                    src="assets/img/line_1.png"
                                    alt="daftar"
                                    width="115px"
                                    class="
                                        position-absolute
                                        line-3
                                        d-none d-lg-inline
                                    "
                                    style="left: -13px; bottom: -15px"
                                />
                            </div>
                            <div class="position-relative">
                                <img
                                    src="assets/img/line_2.png"
                                    alt="daftar"
                                    width="115px"
                                    class="
                                        position-absolute
                                        line-4
                                        d-none d-lg-inline
                                    "
                                    style="left: -13px; top: -15px"
                                />
                                <img
                                    src="assets/img/wawancara.png"
                                    alt="tes"
                                    width="90px"
                                    class="img-fluid alur_image_4"
                                />
                                <p
                                    class="
                                        position-absolute
                                        text-center
                                        alur-text4
                                    "
                                >
                                    4 <br />
                                    Tes Wawancara
                                </p>
                            </div>
                            <div class="position-relative">
                                <p
                                    class="
                                        position-absolute
                                        text-center
                                        alur-text5
                                    "
                                >
                                    5 <br />
                                    Pengumuman dan tunggu konfirmasi dari
                                    panitia
                                </p>
                                <img
                                    src="assets/img/lolos.png"
                                    alt="daftar"
                                    width="90px"
                                    class="img-fluid alur_image_5"
                                />
                                <img
                                    src="assets/img/line_1.png"
                                    alt="daftar"
                                    width="115px"
                                    class="
                                        position-absolute
                                        line-5
                                        d-none d-lg-inline
                                    "
                                    style="left: -13px; bottom: -15px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Regis Section -->

            <!-- ======= Statistic Section ======= -->
            {{-- <section id="stat" class="stat">
                <div
                    class="container"
                    data-aos="fade-up"
                >
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="count-box">
                                <h1 class="mb-5 fw-bold title-stats">
                                    Statistik Pendaftaran
                                </h1>
                                <div
                                    class="position-relative text-center"
                                    data-aos="zoom-in"
                                    data-aos-duration="1000"
                                >
                                    <p class="text-stats">Total Pendaftar</p>
                                    <p class="text-stats2">Quota Penerimaan</p>
                                    <p class="text-stats3">
                                        Total Pengisi Formulir
                                    </p>
                                    <img
                                        src="assets/img/users_stats.png"
                                        alt="stat_image"
                                        width="500"
                                        class="img-fluid pt-5"
                                    />
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="11"
                                        data-purecounter-duration="1"
                                        class="
                                            purecounter
                                            text-white
                                            fs-1
                                            img-stats
                                        "
                                    ></span>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="11"
                                        data-purecounter-duration="1"
                                        class="
                                            purecounter
                                            text-white
                                            fs-1
                                            img-stats2
                                        "
                                    ></span>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="11"
                                        data-purecounter-duration="1"
                                        class="
                                            purecounter
                                            text-white
                                            fs-1
                                            img-stats3
                                        "
                                    ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- End Statistic Section -->

            <!-- ======= Announce Section ======= -->
            <section id="announce" class="announce">
                <div class="container"  data-aos="fade-up">
                    <h1 class="fw-bold text-center title-announce">Pengumuman</h1>
                    <div class="row align-items-center justify-content-around">
                        <div class="col-sm-12 col-lg-5 mb-5 mb-lg-0">
                            <div
                            class="icon-box"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            >
                                <h3 class="title mb-5">
                                    Pengumuman
                                </h3>

                                <div class="description gsap-desc1 mb-5">
                                    <span class="dot"></span>
                                    <h4 class="desc1">Pengumuman</h5>
                                    <p class="desc">
                                        Pengumuman akan di umumkan pada tanggal <b>23 November 2022</b>.
                                    </p>
                                </div>
                                <div class="description gsap-desc2 mb-5">
                                    <span class="dot"></span>
                                    <h4 class="desc1">Penting</h5>
                                    <p class="desc">
                                        Mengecek ulang formulir pendaftran secara menyeluruh.
                                    </p>
                                </div>
                                <div class="description gsap-desc3 mb-5 mb-xl-4">
                                    <span class="dot"></span>
                                    <h4 class="desc1">Test</h5>
                                    <p class="desc">
                                        Mengikuti semua tes yang ada dengan Teliti dan Tertib.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 mb-5 mb-lg-0">
                            <div
                            class="icon-box2"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            >
                                <h3 class="title2 text-nowrap mb-5">
                                    Cara Daftar
                                </h3>

                                <div class="description gsap-desc1 mb-4 mt-1">
                                    <span class="dots d-flex align-items-center justify-content-center">1.</span>
                                    <p class="desc2">
                                        Calon siswa mengisi formulir pendaftaran di website <a href="#" class="text-white text-decoration-underline">PPDB-SMKN1-BMS</a>.
                                    </p>
                                </div>
                                <div class="description gsap-desc2 mb-4">
                                    <span class="dots d-flex align-items-center justify-content-center">2.</span>
                                    <p class="desc2">
                                        Lengkapi formulir pendaftaran dengan data diri yang benar dan isi dengan teliti.
                                    </p>
                                </div>
                                <div class="description gsap-desc3 mb-4">
                                    <span class="dots d-flex align-items-center justify-content-center">3.</span>
                                    <p class="desc2">Jika telah selesai mengisi formulir pendaftaran, cek kembali data yang sudah dimasukkan, apabila sudah benar tekan tombol <b>Daftar</b>.
                                    </p>
                                </div>
                                <div class="description gsap-desc4 mb-5 mb-xl-4">
                                    <span class="dots d-flex align-items-center justify-content-center">4.</span>
                                    <p class="desc2">Selanjutnya silahkan login dengan akun anda menggunakan NISN dan password yang anda isikan di dalam fomulir pendaftaran.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= End Announce Section ======= -->

            <!-- ======= Information Section ======= -->
            <section id="info" class="information">
                <div class="container" data-aos="fade-up">
                    <div class="section-title mb-4 title-info">
                        <h1>Informasi</h1>
                    </div>

                    <div class="row">
                        {{-- @forelse ($informations as $informasi) --}}
                        <div
                                class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                            <div class="icon-box">
                                <a href="{{ route('info-detail') }}" class="text-dark">
                                    <div class="icon">
                                        <img src="#" alt="thumbnail tutorial" class="img-fluid">
                                        {{-- <i class="bx bxl-dribbble"></i> --}}
                                    </div>
                                    <h5>Ketika Cinta Bertasbih</h5>
                                    <p>
                                        {{-- {!! Str::limit($informasi->content, 200, '...') !!} --}}
                                        dsjhfjhsj hjdhsfjhfsjh jhfjshdjs
                                    </p>
                                    <div class="text-muted mt-2">
                                        <p>
                                            {{-- {{ Carbon\Carbon::parse($informasi->created_at)->diffForHumans() }} --}}
                                            22-01-2022
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- @empty
                            <p class="text-center">Belum ada informasi</p>
                        @endforelse --}}
                    </div>
                </div>
            </section>
            <!-- End Information Section -->

            <!-- ======= Activity Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h1 class="title-activity">Prestasi</h1>
                        <p class="subtitle-activity">Terdapat banyak prestasi yang sudah diraih oleh siswa putra/putri SMK Negeri 1 Banyumas.</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">
                                    Semua
                                </li>
                                <li data-filter=".filter-app">Olahraga</li>
                                <li data-filter=".filter-card">Ekstrakurikuler</li>
                                <li data-filter=".filter-web">Seni</li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="row portfolio-container"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-app"
                        >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2019/03/volly.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Volly</h4>
                                <p>Bermain volly bersama <br>dilapangan, setelah pemanasan.</p>
                                <a
                                    href="https://pondokinformatika.com/wp-content/uploads/2019/03/volly.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Bermain volly bersama dilapangan, setelah pemanasan."
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-web"
                        >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2019/03/panahan.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-2.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Web 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-app"
                        >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2019/03/futsal.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-3.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="App 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-card"
                            >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2018/01/Renang.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-4.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Card 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-web"
                        >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2019/03/ceramah.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-5.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Web 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-app"
                        >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2017/11/WhatsApp-Image-2017-11-29-at-07.55.01-1.jpeg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-6.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="App 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-card"
                        >
                            <img
                                src="https://pondokinformatika.com/wp-content/uploads/2018/02/santri-ammar.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-7.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Card 1"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-card"
                        >
                            <img
                                src="./assets/img/portfolio/portfolio-8.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-8.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Card 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item filter-web"
                        >
                            <img
                                src="./assets/img/portfolio/portfolio-9.jpg"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-9.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link"
                                    title="Web 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <!-- <a
                                    href="portfolio-details.html"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Activity Section -->

            <!-- ======= Work Section ======= -->
            {{-- <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h1 class="title-activity">Karya Santri</h1>
                        <p class="subtitle-activity">Banyak karya yang sudah di buat oleh santri Pondok Informatika Al-Madinah dan berikut ini adalah beberapa contohnya.</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters-work">
                                <li data-filter="*" class="filter-active">
                                    Semua
                                </li>
                                <li data-filter=".filter-programming">Programming</li>
                                <li data-filter=".filter-design">Design</li>
                                <li data-filter=".filter-video">Video</li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="row portfolio-container-work"
                        data-aos="fade-up"
                        data-aos-delay="200"
                        >
                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-programming"
                        >
                            <img
                                src="https://media.istockphoto.com/photos/team-of-young-computer-programmers-cooperating-in-the-office-picture-id1157345255?b=1&k=20&m=1157345255&s=170667a&w=0&h=prDhzMeI5tUoecj4kQwxOnRSI6X2vyVMkHbYOGU1Stw="
                                class="img-fluid"
                                alt="image"
                            />
                            <div class="portfolio-info">
                                <h4>Volly</h4>
                                <p>Bermain volly bersama <br>dilapangan, setelah pemanasan.</p>
                                <a
                                    href="https://media.istockphoto.com/photos/team-of-young-computer-programmers-cooperating-in-the-office-picture-id1157345255?b=1&k=20&m=1157345255&s=170667a&w=0&h=prDhzMeI5tUoecj4kQwxOnRSI6X2vyVMkHbYOGU1Stw="
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Bermain volly bersama dilapangan, setelah pemanasan."
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-design"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGRlc2lnbiUyMHdvcmt8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-2.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Web 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-programming"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHByb2dyYW1taW5nJTIwd29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-3.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="App 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-video"
                            >
                            <img
                                src="https://media.istockphoto.com/photos/laptop-pc-with-many-people-having-a-meeting-at-distance-picture-id1226068276?b=1&k=20&m=1226068276&s=170667a&w=0&h=4CEo3YjPzJpyAVMMopkhRICuf5Z8zWWcQ11XuUF-B74="
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-4.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Card 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-design"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1493932484895-752d1471eab5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGRlc2lnbiUyMHdvcmt8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-5.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Web 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-programming"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1taW5nJTIwd29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-6.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="App 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-video"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1629956874549-a21316bfe0a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmlkZW8lMjBpc2xhbXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-7.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Card 1"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-video"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1620802232352-8ad6533690ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlkZW8lMjBpc2xhbXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-8.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Card 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>

                        <div
                            class="col-lg-4 col-md-6 portfolio-item-work filter-design"
                        >
                            <img
                                src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGRlc2lnbiUyMHdvcmt8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                class="img-fluid"
                                alt=""
                            />
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a
                                    href="./assets/img/portfolio/portfolio-9.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox-work preview-link"
                                    title="Web 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="https://pondokinformatika.com/karya-santri/"
                                    class="details-link"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- End Work Section -->

            <!-- ======= Questions and Answers Section ======= -->
            <section id="qna" class="qna section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 class="mb-3 subtitle-activity">Q.&.A</h2>
                        <h1 class="fw-bold mb-3 title-activity">Questions and Answers</h1>
                        <p class="subtitle-activity">
                            Temukan berbagai pertanyaan seputar pendaftaran SMA Negeri 1 Sungai Raya dibawah ini.
                        </p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <ul class="qna-list">

                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question" href="#qna1">Non consectetur a erat nam at lectus urna duis?
                                        <i class="bi bi-chevron-down icon-show"></i>
                                        <i class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="qna1" class="collapse" data-bs-parent=".qna-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question" href="#qna2">Non consectetur a erat nam at lectus urna duis?
                                        <i class="bi bi-chevron-down icon-show"></i>
                                        <i class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="qna2" class="collapse" data-bs-parent=".qna-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question" href="#qna3">Non consectetur a erat nam at lectus urna duis?
                                        <i class="bi bi-chevron-down icon-show"></i>
                                        <i class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="qna3" class="collapse" data-bs-parent=".qna-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question" href="#qna4">Non consectetur a erat nam at lectus urna duis?
                                        <i class="bi bi-chevron-down icon-show"></i>
                                        <i class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="qna4" class="collapse" data-bs-parent=".qna-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question" href="#qna5">Non consectetur a erat nam at lectus urna duis?
                                        <i class="bi bi-chevron-down icon-show"></i>
                                        <i class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="qna5" class="collapse" data-bs-parent=".qna-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Questions and Answers Section -->

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h1 class="fw-bold about-title title-activity"><span>About Us</span></h1>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-6">
                            <div class="info-box mb-4 sub-address">
                                <i class="bx bx-map"></i>
                                <h3>Alamat</h3>
                                <p>Jl.Pramuka Banyumas - Purwokerto Road No.1, Karangpucung, Kejawar, Kec. Banyumas, Kabupaten Banyumas, Jawa Tengah 53192, Indonesia</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box mb-4 sub-email">
                                <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p>smknegerisatu_bms@yahoo.com</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box mb-4 sub-contact">
                                <i class="bx bx-phone-call"></i>
                                <h3>Kontak</h3>
                                <p>
                                    (0281) 796017
                                </p>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12">
                            <iframe
                                class="mb-4 mb-lg-0 sub-map"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1012587.2095800187!2d109.29360200000002!3d-7.529218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec8647565e497462!2sSMK%20Negeri%201%20Banyumas!5e0!3m2!1sen!2sus!4v1641691715266!5m2!1sen!2sus"
                                frameborder="0"
                                style="border: 0; width: 100%; height: 384px"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->
        </main>
        <!-- End Main -->

        <!-- ====== Sponsor Section ======= -->
            <section class="sponsor section-bg">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div
                            class="
                                col-lg-6 col-md-6 col-6
                                d-flex
                                align-items-center
                                justify-content-center
                                logo-sponsor
                            "
                        >
                            <img
                                src="./assets/img/dispen-jateng.png"
                                class="img-fluid"
                                alt="logo-sponsor2"
                            />
                        </div>

                        <div
                            class="
                                col-lg-6 col-md-6 col-6
                                d-flex
                                align-items-center
                                justify-content-center
                                logo-sponsor
                            "
                        >
                            <img
                                src="./assets/img/dispen-bms.png"
                                class="img-fluid"
                                alt="logo-sponsor2"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Sponsor Section -->

        <!-- ======= Footer ======= -->
            <footer id="footer">
                <div class="footer-top">
                    <div class="content-footer overflow-hidden">
                        {{-- <img
                            src="./assets/img/footer.png"
                            alt="logo"
                            class="position-absolute d-none d-md-block"
                            width="2300"
                            style="z-index: -1; top: 30%; left: 60%; transform: translate(-54%, -50%);"
                        /> --}}
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-5 footer-contact mx-auto text-center">
                                <h4 class="text-uppercase mb-5 title-footer-left"></h4>
                                <a
                                    href="https://smkn1bms.sch.id/"
                                    class="text-decoration-none btn-footer"
                                >
                                    <button class="btn rounded-pill px-3 py-2 text-white text-uppercase button-footer-left" style="background: #3e4095;">Info lebih lanjut</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-2 footer-contact text-center my-5 my-lg-0 logo-sponsor">
                                <img src="./assets/img/smk.png" alt="Logo Pondok" width="150">
                            </div>
                            <div class="col-12 col-lg-5 footer-contact">
                                <p class="fs-6 px-0 px-lg-5 footer-right">
                                    SMK Negeri 1 Banyumas membuka penerimaan siswa/siswi baru yang siap menjadi generasi penerus bangsa yang cerdas, displin, berakhlak mulia serta profesional dan siap membela tanah air dengan keahlian dan mau mendedikasikan waktu dan tenaganya untuk NKRI.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ======= Copyright ======= -->
            <div class="copyright text-center">
                &copy; {{ date('Y') }} Copyright <strong><span>Dias Family</span></strong
                >.
            </div>
        <!-- End Footer -->

        <div id="preloader"></div>

        <a
            href="#"
            class="back-to-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short"></i
        ></a>

        <!-- Vendor JS Files -->
        <script src="./assets/vendor/purecounter/purecounter.js"></script>
        <script src="./assets/vendor/aos/aos.js"></script>
        <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="./assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="./assets/vendor/php-email-form/validate.js"></script>
        <script src="./assets/vendor/jquery/jquery.js"></script>
        <script src="./assets/vendor/jquery/jquery.picky.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
			jQuery.extend({

			dobPicker: function (params) {

				// apply defaults
				if (typeof(params.dayDefault) == "undefined") {
					params.dayDefault = "Day";
				}
				if (typeof(params.monthDefault) == "undefined"){
					params.monthDefault = "Month";
				}
				if (typeof(params.yearDefault) == "undefined") {
					params.yearDefault = "Year";
				}
				if (typeof(params.minimumAge) == "undefined") {
					params.minimumAge = 18;
				}
				if (typeof(params.maximumAge) == "undefined") {
					params.maximumAge = 50;
				}

				// find elements
				var dayElement = $(params.daySelector);
				var monthElement = $(params.monthSelector);
				var yearElement = $(params.yearSelector);

				// set days
				dayElement.append("<option value=\"\">" + params.dayDefault + "</option>");
				for (var i = 1; i <= 31; i++) {
					var day = "" + i;
					var value = i > 9 ? "" + i : "0" + i;
					dayElement.append("<option value=\"" + value + "\">" + day + "</option>");
				}

				// set months
				var months = [
					"Januari",
					"Februari",
					"Maret",
					"April",
					"Mei",
					"Juni",
					"Juli",
					"Augustus",
					"September",
					"Oktober",
					"November",
					"Desember"
				];
				monthElement.append("<option value=\"\">" + params.monthDefault + "</option>");
				for (var i = 1; i <= 12; i++) {
					var month = months[i - 1];
					var value = i > 9 ? "" + i : "0" + i;
					monthElement.append("<option value=\"" + value + "\">" + month + "</option>");
				}

				// set years
				var now = (new Date()).getFullYear();
				var minimum = now - params.minimumAge;
				var maximum = minimum - params.maximumAge;
				yearElement.append("<option value=\"\">" + params.yearDefault + "</option>");
				for (i = minimum; i >= maximum; i--) {
					var year = "" + i;
					var value = year;
					yearElement.append("<option value=\"" + value + "\">" + year + "</option>");
				}

				// disable months
				dayElement.change(function () {

					monthElement.selectedIndex = 0;
					yearElement.selectedIndex = 0;
					yearElement.find("option").removeAttr("disabled");

					var day = parseInt(dayElement.val());

					if (day >= 1 && day <= 29) {
						monthElement.find("option").removeAttr("disabled");
					} else if (day == 30) {
						monthElement.find("option").removeAttr("disabled");
						monthElement.find("option[value=\"02\"]").attr("disabled", "disabled");
					} else if(day == 31) {
						monthElement.find("option").removeAttr("disabled");
						monthElement.find("option[value=\"02\"]").attr("disabled", "disabled");
						monthElement.find("option[value=\"04\"]").attr("disabled", "disabled");
						monthElement.find("option[value=\"06\"]").attr("disabled", "disabled");
						monthElement.find("option[value=\"09\"]").attr("disabled", "disabled");
						monthElement.find("option[value=\"11\"]").attr("disabled", "disabled");
					}

				});

				// disable years
				monthElement.change(function () {

					yearElement.selectedIndex = 0;
					yearElement.find("option").removeAttr("disabled");

					var day = parseInt(dayElement.val());
					var month = parseInt(monthElement.val());

					if (day == 29 && month == 2) {
						yearElement.find("option").each(function (index, value) {
							if (index > 0) {
								var option = $(value);
								var year = parseInt(option.attr("value"));
								if (year % 4 == 0) {
									option.attr("disabled", "disabled");
								}
							}
						});
					}

				});

			}

			});
		</script>
        <script>
			$(document).ready(function() {
				$.dobPicker({
					daySelector: '#dobday', /* Required */
					monthSelector: '#dobmonth', /* Required */
					yearSelector: '#dobyear', /* Required */
					dayDefault: 'Tgl', /* Optional */
					monthDefault: 'Bln', /* Optional */
					yearDefault: 'Thn', /* Optional */
					minimumAge: 15, /* Optional */
					maximumAge: 13 /* Optional */
				});
			});
		</script>

        <script>
            /* GSAP */

            //Top-Navbar
            gsap.to(".email-address", {
                text: " info@smkn1bms.sch.id",
                duration: 2,
                delay: 2,
            });
            gsap.to(".no-hp", {
                text: " (0281) 796017",
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

            //Section Home
            gsap.from(".banner-title", {
                x: -100,
                duration: 2,
                opacity: 0,
                delay: 2,
            });
            gsap.from(".sub-banner1", {
                x: -100,
                duration: 2,
                opacity: 0,
                delay: 2.5,
            });
            gsap.from(".sub-banner2", {
                x: -100,
                duration: 2,
                opacity: 0,
                delay: 3,
            });
            gsap.from(".button-banner", {
                duration: 1,
                opacity: 0,
                delay: 4.5,
            });
            gsap.from(".button-banner2", {
                duration: 1,
                opacity: 0,
                delay: 5.5,
            });

            //Section Registration
            gsap.from(".line-1", {
                delay: 2,
                duration: 0.5,
                scale: 0,
                opacity: 0,
            });

            gsap.from(".line-2", {
                delay: 2.5,
                duration: 0.5,
                scale: 0,
                opacity: 0,
            });

            gsap.from(".line-3", {
                delay: 3,
                duration: 0.5,
                scale: 0,
                opacity: 0,
            });

            gsap.from(".line-4", {
                delay: 3.5,
                duration: 0.5,
                scale: 0,
                opacity: 0,
            });

            gsap.from(".line-5", {
                delay: 4,
                duration: 0.5,
                scale: 0,
                opacity: 0,
            });
            gsap.from(".alur_image_1", {
                delay: 4.5,
                duration: 2,
                y: -100,
                opacity: 0,
                ease: "bounce",
            });
            gsap.from(".alur_image_2", {
                delay: 5.5,
                duration: 2,
                y: 100,
                opacity: 0,
                ease: "bounce",
            });
            gsap.from(".alur_image_3", {
                delay: 6.5,
                duration: 2,
                y: -100,
                opacity: 0,
                ease: "bounce",
            });
            gsap.from(".alur_image_4", {
                delay: 7.5,
                duration: 2,
                y: 100,
                opacity: 0,
                ease: "bounce",
            });
            gsap.from(".alur_image_5", {
                delay: 8.5,
                duration: 2,
                y: -100,
                opacity: 0,
                ease: "bounce",
            });
            gsap.from(".alur-text", {
                delay: 9,
                duration: 1,
                scale: 0,
                opacity: 0,
            });
            gsap.from(".alur-text2", {
                delay: 9.5,
                duration: 1,
                scale: 0,
                opacity: 0,
            });
            gsap.from(".alur-text3", {
                delay: 10,
                duration: 1,
                scale: 0,
                opacity: 0,
            });
            gsap.from(".alur-text4", {
                delay: 10.5,
                duration: 1,
                scale: 0,
                opacity: 0,
            });
            gsap.from(".alur-text5", {
                delay: 11,
                duration: 1,
                scale: 0,
                opacity: 0,
            });

            //Section Stats
            gsap.from(".title-stats", {
                y: -50,
                duration: 1.5,
                opacity: 0,
                delay: 2,
                ease: "bounce",
            });
            gsap.from(".text-stats", {
                opacity: 0,
                duration: 2,
                delay: 3,
            });
            gsap.from(".text-stats2", {
                opacity: 0,
                duration: 2,
                delay: 4,
            });
            gsap.from(".text-stats3", {
                opacity: 0,
                duration: 2,
                delay: 5,
            });

            // Section Announce
            gsap.from(".title-announce", {
                y: -50,
                duration: 1.5,
                opacity: 0,
                delay: 2,
                ease: "bounce",
            });
            gsap.from(".gsap-desc1", {
                duration: 1.5,
                opacity: 0,
                delay: 2.5,
            });
            gsap.from(".gsap-desc2", {
                duration: 1.5,
                opacity: 0,
                delay: 3,
            });
            gsap.from(".gsap-desc3", {
                duration: 1.5,
                opacity: 0,
                delay: 3.5,
            });
            gsap.from(".gsap-desc4", {
                duration: 1.5,
                opacity: 0,
                delay: 4,
            });

            //Section Stats
            gsap.from(".title-info", {
                y: -50,
                duration: 1.5,
                opacity: 0,
                delay: 2,
                ease: "bounce",
            });

            //Section Activity
            gsap.from(".title-activity", {
                y: -50,
                duration: 1.5,
                opacity: 0,
                delay: 2,
                ease: "bounce",
            });
            gsap.from(".subtitle-activity", {
                duration: 2,
                delay: 3,
                opacity:0
            });

            //Section Q&A
            gsap.from(".qna1", {
                duration: 1,
                delay: 3.5,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna2", {
                duration: 1,
                delay: 4,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna3", {
                duration: 1,
                delay: 4.5,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna4", {
                duration: 1,
                delay: 5,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna5", {
                duration: 1,
                delay: 5.5,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna6", {
                duration: 1,
                delay: 6,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna7", {
                duration: 1,
                delay: 6.5,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna8", {
                duration: 1,
                delay: 7,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna9", {
                duration: 1,
                delay: 7.5,
                opacity:0,
                x: -50,
            });
            gsap.from(".qna10", {
                duration: 1,
                delay: 8,
                opacity:0,
                x: -50,
            });

            //Section About
            gsap.from(".sub-address", {
                y: 100,
                ease: "back",
                delay: 3.5,
                duration: 1.5,
                opacity: 0
            });
            gsap.from(".sub-email", {
                y: 100,
                ease: "back",
                delay: 4.5,
                duration: 1.5,
                opacity: 0
            });
            gsap.from(".sub-contact", {
                y: 100,
                ease: "back",
                delay: 5.5,
                duration: 1.5,
                opacity: 0
            });
            gsap.from(".sub-map", {
                delay: 6,
                duration: 1.5,
                opacity: 0
            });

            //Section Sponsor
            gsap.from(".logo-sponsor", {
                delay: 2,
                duration: 2,
                rotateY: 360,
                opacity: 0
            });

            //Section Footer
            gsap.to(".title-footer-left", {
                text: "SMK Negeri 1 Banyumas",
                duration: 2,
                delay: 2
            });
            gsap.from(".button-footer-left", {
                duration: 1.5,
                delay: 3,
                y: 50,
                ease: "back",
                opacity: 0
            });
            gsap.from(".footer-right", {
                duration: 1.5,
                delay: 2,
                x: 50,
                ease: "back",
                opacity: 0
            });

            //Copyright
            gsap.from(".copyright", {
                duration: 1.5,
                delay: 2,
                y: 50,
                ease: "elastic",
                opacity: 0,
            });
        </script>

        <!-- Template Main JS File -->
        <script src="./assets/js/main.js"></script>
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

            // Show Password Checkbox
            function showFunction() {
                var x = document.getElementById("password");
                var y = document.getElementById("confirm_password");
                if (x.type === "password") {
                    x.type = "text";
                } if (y.type === "password") {
                    y.type = "text";
                } else {
                    x.type = "password";
                    y.type = "password";
                }
            }
        </script>

        {{-- Clock Start --}}
        <script>
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");
            var radius = canvas.height / 2;
            ctx.translate(radius, radius);
            radius = radius * 0.90
            setInterval(drawClock, 1000);

            function drawClock() {
                drawFace(ctx, radius);
                drawNumbers(ctx, radius);
                drawTime(ctx, radius);
            }

            function drawFace(ctx, radius) {
                var grad;
                ctx.beginPath();
                ctx.arc(0, 0, radius, 0, 2*Math.PI);
                ctx.fillStyle = 'white';
                ctx.fill();
                grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
                grad.addColorStop(0, '#3e4095');
                grad.addColorStop(0.5, 'white');
                grad.addColorStop(1, '#3e4095');
                ctx.strokeStyle = grad;
                ctx.lineWidth = radius*0.1;
                ctx.stroke();
                ctx.beginPath();
                ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
                ctx.fillStyle = '#3e4095';
                ctx.fill();
            }

            function drawNumbers(ctx, radius) {
                var ang;
                var num;
                ctx.font = radius*0.15 + "px arial";
                ctx.textBaseline="middle";
                ctx.textAlign="center";
                for(num = 1; num < 13; num++){
                    ang = num * Math.PI / 6;
                    ctx.rotate(ang);
                    ctx.translate(0, -radius*0.85);
                    ctx.rotate(-ang);
                    ctx.fillText(num.toString(), 0, 0);
                    ctx.rotate(ang);
                    ctx.translate(0, radius*0.85);
                    ctx.rotate(-ang);
                }

            }

            function drawTime(ctx, radius){
                var now = new Date();
                var hour = now.getHours();
                var minute = now.getMinutes();
                var second = now.getSeconds();
                //hour
                hour=hour%12;
                hour=(hour*Math.PI/6)+
                (minute*Math.PI/(6*60))+
                (second*Math.PI/(360*60));
                drawHand(ctx, hour, radius*0.5, radius*0.07);
                //minute
                minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
                drawHand(ctx, minute, radius*0.8, radius*0.07);
                // second
                second=(second*Math.PI/30);
                drawHand(ctx, second, radius*0.9, radius*0.02);
            }

            function drawHand(ctx, pos, length, width) {
                ctx.beginPath();
                ctx.lineWidth = width;
                ctx.lineCap = "round";
                ctx.moveTo(0,0);
                ctx.rotate(pos);
                ctx.lineTo(0, -length);
                ctx.stroke();
                ctx.rotate(-pos);
            }
        </script>
    </body>
</html>
