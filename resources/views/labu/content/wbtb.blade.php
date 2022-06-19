@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
    <div class="container">
        <h2>WBTB</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-four relative">
    <img src="{{ asset('assets/images/about/about-2.png') }}" class="badik_content" alt="">
    <div class=" garis_vertical"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="about-four__content">
                    <div class="block-title">
                        <p class="hidden">Apakah WBTB Itu?</p>
                        <h3>Warisan Budaya Tak Benda</h3>
                    </div><!-- /.block-title -->
                    <p>Warisan Budaya Tak Benda yang sering di singkat dengan WBTb adalah warisan budaya yang
                        dapat berlalu atau hilang dalam waktu, seiring perkembangan zaman seperti konsep dan
                        teknologi. WBTB diatur dalam UU No 5 Tahun 2017 tentang pemajuan kebudayaan, beserta
                        objek-objeknya, diantaranya tradisi lisan, manuskrip, adat istiadat, ritus, pengetahuan
                        tradisional, teknologi tradisional, seni, bahasa, permainan rakyat, olahraga
                        tradisional. Dalam pengertiannya, WBTb merupakan peninggalan atau warisan budaya yang
                        sifatnya tidak dapat dipegang (intagible/abstrak) namun ada disekitar kita.</p>
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->

<section class="list-konten py-10 relative">
    <img class="collection-two__bg" src="{{ asset('assets/images/backgrounds/huruf-lontara2.png') }}" alt="">
    <div class="container">
        @foreach($konten_labu as $a)
        <div class="row mb-4">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('storage/assets/foto/thumbnail/' . $a->thumbnail) }}" alt="">
                </div>
                <h3>
                    <a href="{{ route('wbtb_detail', $a->slug) }}">{{ $a->judul }}</a>
                </h3>
            </div>
        </div>
        @endforeach
        {{ $konten_labu->links('partials.pagination') }}
    </div>
</section>

@endsection