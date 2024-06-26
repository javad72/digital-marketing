<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.19.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2024 04:43:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>
    {{--    https://prium.github.io/falcon/v3.21.0/index.html--}}
    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/admin/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/admin/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/admin/img/favicons/favicon.ico">
    {{--    <link rel="manifest" href="{{asset('assets/admin/img/favicons/manifest.json')}}">--}}
    <meta name="msapplication-TileImage" content="{{asset('assets/admin/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    @vite('resources/assets/vendors/simplebar/simplebar.min.js')
    @vite('resources/assets/vendors/simplebar/simplebar.min.css')
    <script src="{{ asset('assets/admin/js/config.js') }}"></script>
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/theme-rtl.min.css') }}" id="style-rtl">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/theme.min.css') }}" id="style-default">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/user.min.css') }}" id="user-style-default">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/user-rtl.min.css') }}" id="user-style-rtl">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assets/css/user.min.css') }}" id="user-style">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>
<body>




<!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
<main class="main" id="top">
    <div class="container" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
