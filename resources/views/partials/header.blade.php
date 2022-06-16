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
                    <a href="{{ route('parasanganta') }}">
                        <img src="{{asset('assets/images/logo/logo-parasanganta.svg')}}" alt="" width="230">
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
                        <li><a href="{{route('tentangkegiatan')}}">Event</a></li>
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
