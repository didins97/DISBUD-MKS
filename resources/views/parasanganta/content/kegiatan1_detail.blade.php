@extends('layout.app')

@section('content')



@include('partials.header')


<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }});background-size: cover;background-position: center;">
    <div class="container">
        <h2>KEGIATAN</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="event-details">
    <div class="container">
        <div class="event-details__top">
            <p class="d-none">Wednesday, Dec 18, 2019</p>
            <h3>{{$foto->nama}}</h3>

        </div><!-- /.event-details__top -->
        <div class="row high-gutter">
            <div class="col-lg-8 mb-4">
                <div class="event-details__main">

                    <div class="event-details__content">
                        {!!$foto->konten!!}
                    </div><!-- /.event-details__content -->
                </div><!-- /.event-details__main -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="event-details__booking">
                    <img src="{{ asset('storage/assets/foto/thumbnail/' . $foto->thumbnail) }}" class="event-details__img mb-2" alt="...">
                    <div class="event-details__booking__wrap">
                        <ul class="event-details__booking-info list-unstyled">
                            <li>
                                <span>Nama Lain</span>
                                {{$foto->nama_lain}}
                            </li>
                            <li>
                                <span>Kategori</span>
                                Kegiatan
                            </li>
                            <li>
                                <span>Letak</span>
                                {!!$foto->letak!!}

                            </li>
                            <li>
                                <span>Kelurahan</span>
                                {{$foto->kelurahan}}
                            </li>
                            <li>
                                <span>Kecamatan</span>
                                {{$foto->kecamatan}}
                            </li>
                        </ul><!-- /.event-details__booking-info list-unstyled -->
                        <div class="row justify-content-center">
                            <div class="col-8 text-center py-4 bg-white">
                                {{QrCode::size(175)->generate( url()->current() );}}
                            </div>
                        </div>
                        <!-- /.thm-btn event-details__book-btn -->
                    </div>
                </div><!-- /.event-details__booking -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-12 mt-5 event-details__content">
                <h3>Galeri</h3>
                <div class="grid-gallery mt-4" id="galleries">
                    @for( $i = 0; $i < count(unserialize($foto->galleries)); $i++ )

                        <a href="{{ asset('storage/assets/foto/galleries/' . unserialize($foto->galleries)[$i]) }}" class="item-gallery">
                            <img src="{{ asset('storage/assets/foto/galleries/' . unserialize($foto->galleries)[$i]) }}" />
                        </a>
                        @endfor
                        <div class="placeholder"></div>
                </div>
                @if($foto->longitude != null && $foto->latitude != null)
                    <h3 class="mt-5">Peta</h3>
                    <input type="hidden" id="longi" placeholder="longi" value={{$foto->longitude}}>
                    <input type="hidden" id="lati" placeholder="lati" value={{$foto->latitude}}>
                    <div id="map" class="google-map__contact" allowfullscreen></div>
                @endif
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact" allowfullscreen></iframe> --}}
            </div>
            @php
            $konten_name = 'kegiatan1';
            $konten = $foto;
            @endphp
            @include('parasanganta.partials.social-share')
            <div class="col-lg-12 mt-5 event-details__content">
                <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.event-details -->

<section class="cta-one" style="background-image: url( {{ asset('assets/images/shapes/cta-bg-1-1.jpg') }});">
    <div class="container text-center">
        <h3>Download Informasi Lengkap</h3>
        <p>
            Download Informasi lengkap mengenai cagar budaya ini dalam bentuk PDF
        </p>
        <div class="cta-one__btn-block ">
            <button class="thm-btn cta-one__btn-two btn-pill" data-toggle="modal" data-target="#downloadPDF">Download PDF</button><!-- /.thm-btn cta-one__btn-two -->
        </div>
        <!-- /.cta-one__btn-block -->
    </div>
    <!-- /.container -->
</section>
@include('partials.location')

@endsection
