<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Required meta tags --}}
    @include('includes.meta')

    {{-- Title --}}
    <title>@yield('title')</title>

    {{-- CSS --}}
    @stack('beforeCss')
    @include('includes.style')
    @stack('afterCss')
</head>
<body>
  <div class="container-scroller">
    {{-- Navbar --}}
    @include('includes.navbar')

    <div class="container-fluid page-body-wrapper">
    {{-- Settings --}}
    @include('includes.setting')

    {{-- Sidebar --}}
    @include('includes.sidebar')

    {{-- Main Panel --}}
    <div class="main-panel">

        {{-- content-wrapper --}}
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        {{-- Export --}}
                        @include('includes.export.export')
                        {{-- Content --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{-- content-wrapper ends --}}

        {{-- Footer --}}
        @include('includes.footer')

      </div>
      {{-- main-panel ends --}}
    </div>
    {{-- page-body-wrapper ends --}}
  </div>
  {{-- container-scroller --}}

  {{-- Script --}}
  @stack('beforeScript')
  @include('includes.script')
  @stack('afterScript')

</body>

</html>
