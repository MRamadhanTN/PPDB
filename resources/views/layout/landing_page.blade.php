<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="copyright">
        <meta name="author" content="PPDB_Online">
        <link rel="icon" href="{{ asset("dist/images/logo.png") }}">
        <title>@yield('title')</title>

        {{-- CSS --}}
        @stack('beforeCss')
        @include('include.style')
        @stack('afterCss')
    </head>

    <body style="background-image: url({{ asset('dist/images/bg.png') }});">
        {{-- Preloader --}}
        @include('include.preloader')

        {{-- Navbar --}}
        @include('include.navbar')

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('include.footer')

        {{-- Script --}}
        @stack('beforeScript')
        @include('include.script')
        @stack('afterScript')
    </body>
</html>
