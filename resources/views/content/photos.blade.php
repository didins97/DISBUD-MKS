@extends('layout.app')

@section('content')


<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->
<div class="page-wrapper">
    <nav class="main-nav-one stricky main-nav-one__home-two">
        <div class="container">
            <div class="inner-container">
                <div class="logo-box">
                    <a href="parasanganta/index.html">
                        <img src="assets/images/logo/logo-parasanganta.svg" alt="" width="230">
                    </a>
                    <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
                </div><!-- /.logo-box -->
                <div class="main-nav__main-navigation">
                    <ul class="main-nav__navigation-box">
                        <li><a href="parasanganta/index.html">Beranda</a></li>
                        <li><a href="parasanganta/#">Konten</a></li>
                        <li><a href="parasanganta/informasi.html">Informasi</a></li>
                        <li><a href="parasanganta/event.html">Event</a></li>
                        <li><a href="parasanganta/tentang.html">Tentang</a></li>
                    </ul><!-- /.main-nav__navigation-box -->
                </div><!-- /.main-nav__main-navigation -->
                <div class="main-nav__right">
                    <a href="#" class="search-popup__toggler"><i class="muzex-icon-search"></i></a>
                    <!-- <a class="sidemenu-icon side-content__toggler" href="#"><i class="muzex-icon-menu"></i></a> -->
                </div><!-- /.main-nav__right -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </nav><!-- /.main-nav-one -->

    <section class="page-header"
        style="background-image: url(assets/images/backgrounds/musium-kota-makassar.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <h2>ARTIKEL</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-one relative">
        <img src="assets/images/backgrounds/huruf-lontara-satuan-1.svg" alt="" class="bg-lontara-one">
        <img src="assets/images/backgrounds/huruf-lontara-satuan-2.svg" alt="" class="bg-lontara-two">

        <div class="container">
            <div class="row">
                @foreach( $foto as $a )
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('storage/assets/artikel/thumbnail/' . $a->thumbnail) }}" alt="">
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                20 Nov 2022
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">{{ $a->penulis != 'admin' ? $a->kontributor_relasi->nama : 'admin' }}</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul>
                            <h3><a href="news-details.html">{{ $a->judul_indo }}</a></h3>
                            <p>{!!$a->konten_indo!!}</p>
                            <a href="news-details.html" class="blog-one__link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
               
            </div><!-- /.row -->
            
            <div class="text-center d-flex justify-content-center">
                <div class="post-pagination mt-10">
                    <a href="#" class="page"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="page">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <a href="#" class="page"><i class="fa fa-angle-right"></i></a>
                </div><!-- /.post-pagination -->
            </div><!-- /.text-center d-flex justify-content-center -->
        </div>
    </section>
    @endsection