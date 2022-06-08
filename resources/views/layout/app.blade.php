<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARASANGANTA</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/logo/favicon-parasanganta.svg')}}">
    <link rel="icon" type="image/svg" sizes="32x32" href="{{asset('assets/images/logo/favicon-parasanganta.svg')}}">
    <link rel="icon" type="image/svg" sizes="16x16" href="{{asset('assets/images/logo/favicon-parasanganta.svg')}}">
    <link rel="manifest" href="{{asset('assets/images/favicon/site.webmanifest')}}">

    <!-- Fonts URL -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/muzex-icons.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/parasanganta-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">


</head>

<body>

    @yield('content')
    @include('partials.footer')
    {{-- Footer --}}
    </div><!-- /.page-wrapper -->

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="/" class="side-menu__logo"><img src="assets/images/logo/logo-parasanganta2.svg" alt="" width="170"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2022 <a href="#">DISBUD Kota Makassar</a> - All rights reserved.</p>
            <div class="side-menu__social d-none">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Template JS -->

    @include('partials.js')


</body>

</html>