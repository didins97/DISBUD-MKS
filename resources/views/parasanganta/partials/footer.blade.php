<footer class="site-footer">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget footer-widget__about">
                        <img src="{{  asset('assets/images/logo/logo-disbud.webp') }}" alt="" height="90">
                        <p class="less-line">Dinas Kebudayaan <br> Pemerintah Kota Makassar</p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-2">
                    <div class="footer-widget footer-widget__links">
                        <h3 class="footer-widget__title">Konten</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links-list list-unstyled">
                            <li><a href="{{route('tentangbenda')}}">Benda</a></li>
                            <li><a href="{{route('tentangbangunan')}}">Bangunan</a></li>
                            <li><a href="{{route('tentangstruktur')}}">Struktur</a></li>
                            <li><a href="{{route('tentangsitus')}}">Situs</a></li>
                            <li><a href="{{route('tentangkawasan')}}">Kawasan</a></li>
                            <li><a href="{{route('tentangkegiatan')}}">Kegiatan</a></li>
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-2 -->
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">Kontak</h3><!-- /.footer-widget__title -->
                        <p>Jl. Balaikota No.11, Baru, <br>Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan
                            90111
                        </p>
                        <p>(0411) 449817</p>
                        <p><a href="mailto:disbudmakassar@gmail.com">disbudmakassar@gmail.com</a></p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget__open-hrs">
                        <h3 class="footer-widget__title">Media Sosial</h3><!-- /.footer-widget__title -->
                        <a class="sosmed-icon" href="javascript:;"><i class="fab fa-instagram"></i></a>
                        <a class="sosmed-icon" href="javascript:;"><i class="fab fa-facebook"></i></a>
                        <a class="sosmed-icon" href="javascript:;"><i class="fab fa-twitter"></i></a>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <div class="inner-container">
                <p>&copy; Copyright 2022 Dinas Kebudayaan Kota Makassar</p>
                <a href="{{ route('home') }}" class="site-footer__bottom-logo">
                    <img src="{{  asset('assets/images/resources/logo-makassar.png') }}" alt="" width="60">
                </a>
                <div class="site-footer__bottom-links">
                    <!-- <a href="javascript:;">Terms & conditions</a> -->
                    <a href="javascript:;">Privacy policy & Terms of use</a>
                </div><!-- /.site-footer__bottom-links -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</footer><!-- /.site-footer -->
