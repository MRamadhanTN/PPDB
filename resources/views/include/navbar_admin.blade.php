
{{-- Header Area Start --}}
<header class="header-area header-sticky">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12 col-12">
                <nav class="main-nav d-flex justify-content-between px-5">
                    {{-- Logo Start --}}
                    <div>
                        <a href="{{ url('/#welcome') }}" class="logo">
                            <img src="{{ asset('dist/images/logo.png') }}" alt="image" width="60" height="60">
                            <span style="color: #5E6073;" class="fs-4 ml-2 name-apk">PPDB Online</span>
                        </a>
                    </div>
                    {{-- Logo End --}}

                    {{-- Menu Start --}}
                    <ul class="nav h-25 rounded-right">
                        <li class="scroll-to-section"><a href="{{ url('/') }}" class="menu-item px-3 rounded-lg back">Back</a></li>
                    </ul>
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
