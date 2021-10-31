
{{-- Header Area Start --}}
<header class="header-area header-sticky">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12 col-12">
                <nav class="main-nav d-flex justify-content-between px-5">
                    {{-- Logo Start --}}
                    <div class="w-20">
                        <a href="{{ url('/#welcome') }}" class="logo">
                            <img src="{{ asset('dist/images/logo.png') }}" alt="image" width="60" height="60">
                            <span style="color: #5E6073;" class="fs-6 name-apk">PPDB Online</span>
                        </a>
                    </div>
                    {{-- Logo End --}}

                    {{-- Menu Start --}}
                    <div class="w-80">
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#regis" class="menu-item">Daftar</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Statistik</a></li>
                            <li class="scroll-to-section"><a href="#promotion" class="menu-item">Pengumuman</a>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="{{ route('LoginAdmin') }}" class="menu-item">Admin</a></li>
                        </ul>
                    </div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    {{-- Menu End --}}
                </nav>
            </div>
        </div>
    </div>
</header>
{{-- Header Area End --}}
