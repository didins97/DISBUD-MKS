@extends('layout.app')

@section('content')


<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->
<div class="page-wrapper">
    <nav class="main-nav-one stricky main-nav-one__home-three">
        <div class="container">
            <div class="inner-container">
                <div class="logo-box">
                    <a href="{{ route('parasanganta') }}">
                        <img src="{{ asset('assets/images/logo/logo-parasanganta2.svg') }}" alt="" width="230">
                    </a>
                    <a href="javascript:;" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
                </div><!-- /.logo-box -->
                <div class="main-nav__main-navigation">
                    <ul class="main-nav__navigation-box">
                        <li><a href="{{route('parasanganta')}}">Beranda</a></li>
                        <li class="dropdown">
                            <a href="javascript:;">Konten</a>
                            <ul>
                                <li><a href="{{route('tentangbenda')}}">Benda</a></li>
                                <li><a href="{{route('tentangbangunan')}}">Bangunan</a></li>
                                <li><a href="{{route('tentangstruktur')}}">Struktur</a></li>
                                <li><a href="{{route('tentangsitus')}}">Situs</a></li>
                                <li><a href="{{route('tentangkawasan')}}">Kawasan</a></li>
                                <li><a href="{{route('tentangkegiatan1')}}">Kegiatan</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('articles')}}">Artikel</a></li>
                        <li><a href="{{route('events')}}">Event</a></li>
                        <li><a href="{{route('tentang')}}">Tentang</a></li>
                    </ul><!-- /.main-nav__navigation-box -->
                </div><!-- /.main-nav__main-navigation -->
                <div class="main-nav__right">
                    <a href="#" class="search-popup__toggler"><i class="muzex-icon-search"></i></a>
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
                <div class="image-layer lazy-image" style="background-image: url('assets/images/backgrounds/museumsss.jpg');"></div>
                <div class="container">
                    <div class="content-box text-left">
                        <h3 id="tglArtikel">SIMCABUD</h3>
                        <h2 id="judulArtikel">Sistem Informasi Cagar Budaya<br> Kota Makassar</h2>
                        <!-- <div class="btn-box">
                            <a href="{{route('tentang')}}" class="thm-btn btn-pill btn-style-one">Selengkapnya</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->

    <section class="collection-two collection-two__home-three">
        <img class="collection-two__bg" src="assets/images/backgrounds/huruf-lontara2.webp" alt="">
        <div class="container">
            <div class="block-title-two text-center">
                <div class="block-title-two__line"></div><!-- /.block-title-two__line -->
                <p>Konten</p>
                <h3>Jelajahi Lebih Dalam</h3>
            </div><!-- /.block-title-two -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="collection-two__single">
                                <div class="collection-two__image">
                                    <div class="layer-mask"></div>
                                    <img src="assets/images/img/benda.webp" alt="">
                                    <div class="row collection-two__image__info">
                                        <div class="col-12 text-center">
                                            <h3>Benda</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('tentangbenda')}}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="collection-two__single">
                                <div class="collection-two__image">
                                    <div class="layer-mask"></div>
                                    <img src="assets/images/img/bangunan.webp" alt="">
                                    <div class="row collection-two__image__info">
                                        <div class="col-12 text-center">
                                            <h3>Bangunan</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('tentangbangunan')}}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="collection-two__single">
                                <div class="collection-two__image">
                                    <div class="layer-mask"></div>
                                    <img src="assets/images/img/struktur.webp" alt="">
                                    <div class="row collection-two__image__info">
                                        <div class="col-12 text-center">
                                            <h3>Struktur</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('tentangstruktur')}}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-4">
                            <div class="collection-two__single">
                                <div class="collection-two__image">
                                    <div class="layer-mask"></div>
                                    <img src="assets/images/img/situs.jpeg" alt="">
                                    <div class="row collection-two__image__info">
                                        <div class="col-12 text-center">
                                            <h3>Situs</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('tentangsitus')}}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="collection-two__single">
                                <div class="collection-two__image">
                                    <div class="layer-mask"></div>
                                    <img src="assets/images/img/kawasan.webp" alt="">
                                    <div class="row collection-two__image__info">
                                        <div class="col-12 text-center">
                                            <h3>Kawasan</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('tentangkawasan')}}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="collection-two__single">
                                <div class="collection-two__image">
                                    <div class="layer-mask"></div>
                                    <img src="assets/images/img/kegiatan.webp" alt="">
                                    <div class="row collection-two__image__info">
                                        <div class="col-12 text-center">
                                            <h3>Kegiatan</h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('tentangkegiatan1')}}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-one bg-gray">
        <div class="container">
            <div class="blog-one__top">
                <div class="block-title">
                    <p>INFORMASI</p>
                    <h3>Artikel Terbaru</h3>
                </div>
                <div class="more-post__block">
                    <a class="more-post__link" href="{{route('articles')}}">
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
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#"> {{ $a->penulis != 'admin' ? $a->kontributor_relasi->nama : 'admin' }}</a></li>
                                {{-- <li><a href="#">03 Comments</a></li> --}}
                            </ul>
                            <h3><a href="{{ route('article_detail', $a->slug) }}">{{ $a->judul_indo }}</a></h3>
                            <p>{!! Str::limit($a->konten_indo, 100) !!}</p>
                            <a href="{{ route('article_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="event-one">
        <img src="assets/images/resources/badik.webp" alt="" class="event-one__moc" width="250px">
        <div class="container">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span>
                <p>Event</p>
                <h3>Event yang akan datang</h3>
            </div>
            <div class="row">
                @foreach($kegiatan as $k)
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>31</span>
                                Oct
                            </div>
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="{{ asset('storage/assets/kegiatan/thumbnail/' . $k->thumbnail) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h3><a href="{{route('event_detail',$k->slug)}}">{{$k->judul_indo}}</a></h3>
                            <p>{!! Str::limit($k->konten_indo, 100) !!}</p>
                        </div>
                        <div class="event-one__btn-block">
                            <a href="{{route('event_detail',$k->slug)}}" class="thm-btn event-one__btn btn-pill">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection