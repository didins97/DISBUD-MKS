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
                    <a href="/">
                        <img src="assets/images/logo/logo-parasanganta.svg" alt="" width="230">
                    </a>
                    <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
                </div><!-- /.logo-box -->
                <div class="main-nav__main-navigation">
                    <ul class="main-nav__navigation-box">
                        <li><a href="/">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#">Konten</a>
                            <ul>
                                <li><a href="{{route('tentangbenda')}}">Benda</a></li>
                                <li><a href="{{route('tentangbangunan')}}">Bangunan</a></li>
                                <li><a href="{{route('tentangstruktur')}}">Struktur</a></li>
                                <li><a href="{{route('tentangsitus')}}">Situs</a></li>
                                <li><a href="{{route('tentangkawasan')}}">Kawasan</a></li>
                                <li><a href="{{route('tentangkegiatan')}}">Kegiatan</a></li>
                            </ul>
                        </li>
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

    <section class="page-header" style="background-image: url(assets/images/backgrounds/musium-kota-makassar.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <h2>Kawasan</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="collection-two collection-two__collection-full-page">
        <div class="container-fluid">
            <div class="block-title-two text-center">
                <p>Gallery</p>
                <h3>Daftar <br> Kawasan</h3>
            </div><!-- /.block-title-two -->
            <div class="collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{
                    "loop": true, "margin": 0, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "items": 5, "smartSpeed": 700, "dots": false, "nav": true, "responsive": {
                        "1920": { "items": 5},
                        "1440": { "items": 4},
                        "1199": { "items": 4},
                        "991": { "items": 3},
                        "767": { "items": 2},
                        "575": { "items": 2},
                        "480": { "items": 2},
                        "0": { "items": 1}
                    }
                }'>
                @foreach($artikel as $a)


                <div class="item">
                    <div class="collection-two__single">
                        <div class="collection-two__image">
                            <img src="{{ asset(get_asset_path($a->getTable(), $a->thumbnail)) }}" alt="">
                        </div><!-- /.collection-two__image -->
                        <div class="collection-two__content">
                            <h3>{{$a->judul_indo}}</h3>
                            <p>1885</p>
                            {{-- <a href="./parasanganta/konten-detail.html" class="stretched-link"></a> --}}
                            <a href="{{ route('photo_detail', $a->slug) }}" class="stretched-link"></a>

                        </div><!-- /.collection-two__content -->
                    </div><!-- /.collection-two__single -->
                </div><!-- /.item -->

                @endforeach





            </div><!-- /.collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme -->
        </div><!-- /.container-fluid -->
    </section><!-- /.collection-two -->

    @endsection