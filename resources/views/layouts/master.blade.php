<!DOCTYPE html>
<html lang="fa">

<head>
    <title>@yield('title', setting('site.title'))</title>

    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <meta name="application-name" content="{{ setting('site.title') }}">
    <meta name="author" content="مسعود منصوری">
    <meta name="description" content="@yield('description', setting('site.description'))">
    <meta name="keywords" content="@yield('keywords', setting('site.keywords'))">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }}">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

</head>

<body class="bg-light style-default style-rounded">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
@include('layouts.sidebar')
<!-- end sidenav -->

<main class="main oh" id="main">

    <!-- Navigation -->
    @include('layouts.navigation')
    <!-- end navigation -->


    @yield('content')


    <!-- Footer -->
    @include('layouts.footer')
    <!-- end footer -->

</main> <!-- end main-wrapper -->

<!-- jQuery Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/easing.min.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/twitterFetcher_min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.newsTicker.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
