<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/abstrak/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 13:03:18 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abstrak | Digital Agency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png"> -->
    @vite('resources/client-assets/css/vendor/bootstrap.min.css')
    @vite('resources/client-assets/css/vendor/font-awesome.css')
    @vite('resources/client-assets/css/vendor/slick.css')
    @vite('resources/client-assets/css/vendor/slick-theme.css')
    @vite('resources/client-assets/css/vendor/sal.css')
    @vite('resources/client-assets/css/vendor/magnific-popup.css')
    @vite('resources/client-assets/css/vendor/green-audio-player.min.css')
    @vite('resources/client-assets/css/vendor/odometer-theme-default.css')
    @vite('resources/client-assets/css/app.css')


</head>

<body class="rtl sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="far fa-angle-double-up"></i>
</a>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div class="my_switcher d-none d-lg-block">
    <ul>
        <li title="Light Mode">
            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                <i class="fal fa-lightbulb-on"></i>
            </a>
        </li>
        <li title="Dark Mode">
            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                <i class="fas fa-moon"></i>
            </a>
        </li>
    </ul>
</div>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="header axil-header header-style-1">
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-action">
                        <ul class="list-unstyled">
                            <li class="sidemenu-btn d-lg-block d-none">
                                <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </li>
                            <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </li>
                            <li class="my_switcher d-block d-lg-none">
                                <ul>
                                    <li title="Light Mode">
                                        <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                            <i class="fal fa-lightbulb-on"></i>
                                        </a>
                                    </li>
                                    <li title="Dark Mode">
                                        <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                            <i class="fas fa-moon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav" id="mobilemenu-popup">
                            <div class="d-block d-lg-none">
                                <div class="mobile-nav-header">
                                    <div class="mobile-nav-logo">
                                        <a href="index-1.html">
                                            <img class="light-mode" src="{{ Vite::asset('resources/client-assets/media/logo-2.svg') }}" alt="Site Logo">
                                            <img class="dark-mode" src="{{ Vite::asset('resources/client-assets/media/logo-3.svg') }}" alt="Site Logo">
                                        </a>
                                    </div>
                                    <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            @include('livewire.client.layouts.menu')
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>

                    <div class="header-logo">
                        <a href="index-1.html"><img class="light-version-logo" src="{{ Vite::asset('resources/client-assets/media/logo.svg') }}" alt="logo"></a>
                        <a href="index-1.html"><img class="dark-version-logo" src="{{ Vite::asset('resources/client-assets/media/logo-3.svg') }}" alt="logo"></a>
                        <a href="index-1.html"><img class="sticky-logo" src="{{ Vite::asset('resources/client-assets/media/logo-2.svg') }}" alt="logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@yield('content')

<script src="{{asset('client-assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
@vite([
        'resources/client-assets/js/vendor/bootstrap.min.js',
        'resources/client-assets/js/vendor/isotope.pkgd.min.js',
        'resources/client-assets/js/vendor/imagesloaded.pkgd.min.js',
        'resources/client-assets/js/vendor/odometer.min.js',
        'resources/client-assets/js/vendor/jquery-appear.js',
        'resources/client-assets/js/vendor/slick.min.js',
        ])
<script src="{{asset('client-assets/js/vendor/sal.js')}}"></script>
@vite([
'resources/client-assets/js/vendor/jquery.magnific-popup.min.js',
'resources/client-assets/js/vendor/js.cookie.js',
])
<script src="{{asset('client-assets/js/vendor/jquery.style.switcher.js')}}"></script>
@vite([
'resources/client-assets/js/vendor/jquery.countdown.min.js',
'resources/client-assets/js/vendor/tilt.js',
'resources/client-assets/js/vendor/green-audio-player.min.js',
'resources/client-assets/js/vendor/jquery.nav.js',
'resources/client-assets/js/app.js',
 ])
</body>
</html>
