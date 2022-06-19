@extends('labu.layout.app')

@section('content')

<div class="page-wrapper">
    <nav class="main-nav-one stricky main-nav-one__home-three">
        <div class="container">
            <div class="inner-container">
                <div class="logo-box">
                    <a href="{{ route('labu') }}">
                        <img src="{{ asset('assets/images/logo/logo-labu-white.svg') }}" alt="" width="155">
                    </a>
                    <a href="javascript:;" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
                </div><!-- /.logo-box -->
                <div class="main-nav__main-navigation">
                    <ul class="main-nav__navigation-box">
                        <li><a href="{{ route('labu') }}" class="labu-nav__link light">Beranda</a></li>
                        <li><a href="{{ route('opk') }}" class="labu-nav__link light">OPK</a></li>
                        <li><a href="{{ route('wbtb') }}" class="labu-nav__link dark">WBTB</a></li>
                        <li><a href="{{ route('hari-kebudayaan') }}" class="labu-nav__link light">Hari Kebudayaan</a></li>
                        <li><a href="{{ route('labu') }}" class="labu-nav__link light">Kampung Budaya</a></li>
                    </ul><!-- /.main-nav__navigation-box -->
                </div><!-- /.main-nav__main-navigation -->
                <div class="main-nav__right">
                    <a href="javascript:;" class="search-popup__toggler"><i class="muzex-icon-search"></i></a>
                    <!-- <a class="sidemenu-icon side-content__toggler" href="#"><i class="muzex-icon-menu"></i></a> -->
                </div><!-- /.main-nav__right -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </nav><!-- /.main-nav-one -->


    <!-- banner section -->
    <section class="banner-section banner-section__home-two banner-section__home-three">
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/blog/blog-labu.png');">
                    <div class="layer-mask"></div>
                </div>
                <div class="container">
                    <div class="content-box text-center">
                        <h2 id="labu-judulArtikel">Laman Budaya</h2>
                        <p class="labu-description">Kebudayaan perlu dimajukan dengan saksama. Dari unsur-unsur
                            kebudayaan yang berwujud benda, hingga yang tak kasat mata.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->

    <section class="collection-grid collection-masonary relative">
        <img class="collection-two__bg" src="{{ asset('assets/images/backgrounds/huruf-lontara2.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-md-5 mb-sm-5">
                    <div class="block-title text-left">
                        <p class="text-regular">Konten</p>
                        <h3 class="title-konten">Jelajahi
                            Konten <br> Laman Budaya <br>
                            Disbud
                            Makassar</h3>
                    </div><!-- /.block-title -->
                </div>
                <div class="col-lg-8 col-md-12 col-sm-10 masonary-layout left-5">
                    <div class="col-lg-5 col-md-4 filter-item masonary-item pic">
                        <div class="collection-grid__single">
                            <div class="collection-grid__image text-center radius-medium">
                                <img src="{{ asset('assets/images/konten/konten-1.png') }}" alt="">
                                <a href="{{ route('opk') }}" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                            </div><!-- /.collection-grid__image -->
                            <div class="collection-grid__content">
                                <h3><a href="{{ route('opk') }}">Objek Pemajuan Kebudayaan</a></h3>
                            </div><!-- /.collection-grid__content -->
                        </div><!-- /.collection-grid__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-5 col-md-4  filter-item masonary-item dis">
                        <div class="collection-grid__single">
                            <div class="collection-grid__image text-center radius-medium">
                                <img src="{{ asset('assets/images/konten/konten-2.png') }}" alt="" class="radius-medium">
                                <a href="{{ route('hari-kebudayaan') }}" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                            </div><!-- /.collection-grid__image -->
                            <div class="collection-grid__content">
                                <h3><a href="{{ route('hari-kebudayaan') }}">Hari Kebudayaan</a></h3>
                            </div><!-- /.collection-grid__content -->
                        </div><!-- /.collection-grid__single -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-5 col-md-4 filter-item masonary-item pic poster">
                        <div class="collection-grid__single">
                            <div class="collection-grid__image text-center radius-medium">
                                <img src="{{ asset('assets/images/konten/konten-4.png') }}" alt="" class="radius-medium">
                                <a href="{{ route('wbtb') }}" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                            </div><!-- /.collection-grid__image -->
                            <div class="collection-grid__content">
                                <h3><a href="{{ route('wbtb') }}">Warisan Budaya Tak Benda</a></h3>
                            </div><!-- /.collection-grid__content -->
                        </div><!-- /.collection-grid__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-5 col-md-4 filter-item masonary-item dis pic">
                        <div class="collection-grid__single">
                            <div class="collection-grid__image text-center radius-medium">
                                <img src="{{ asset('assets/images/konten/konten-3.png') }}" alt="" class="radius-medium">
                                <a href="{{ route('kampung-budaya') }}" class="collection-grid__link">+</a><!-- /.collection-grid__link -->
                            </div><!-- /.collection-grid__image -->
                            <div class="collection-grid__content">
                                <h3><a href="{{ route('kampung-budaya') }}">Kampung Budaya</a></h3>
                            </div><!-- /.collection-grid__content -->
                        </div><!-- /.collection-grid__single -->
                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.collection-grid -->

    <section class="blog-one bg-gray">
        <div class="container">
            <div class="blog-one__top">
                <div class="block-title">
                    <p class="text-regular">INFORMASI</p>
                    <h3>Artikel Terbaru</h3>
                </div>
                <div class="more-post__block">
                    <a class="more-post__link" href="{{ route('article_labu') }}">
                        All Post
                        <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>

                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($artikel as $a)
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('storage/assets/artikel/thumbnail/' . $a->thumbnail) }}" alt="">
                            <div class="blog-one__date btn-pill">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="javascript:;"> {{ $a->penulis != 'admin' ? $a->kontributor_relasi->nama : 'admin' }}</a></li>
                                {{-- <li><a href="javascript:;">03 Comments</a></li> --}}
                            </ul>
                            <h3><a href="{{ route('article_labu_detail', $a->slug) }}">{{ $a->judul_indo }}</a></h3>
                            <p>{!! Str::limit($a->konten_indo, 100) !!}</p>
                            <a href="{{ route('article_labu_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    @endsection
