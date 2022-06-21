@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')


<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/bg-header.jpg') }}); background-size: cover; background-position: center;">
    <div class="container">
        <h2>OPK</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-four relative">
    <img src="{{ asset('assets/images/about/about-2.png')}}" class="badik_content" alt="">
    <div class=" garis_vertical"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="about-four__content">
                    <div class="block-title">
                        <p class="hidden">Apakah OPK Itu?</p>
                        <h3>Objek Pemajuan Kebudayaan</h3>
                    </div><!-- /.block-title -->
                    <p>Objek pemajuan kebudayaan adalah unsur kebudayaan yang menjadi sasaran utama pemajuan
                        kebudayaan. Berdasarkan Undang-Undang (UU) Pemajuan Kebudayaan, tindakan yang dilakukan
                        terhadap objek pemajuan kebudayaan yakni inventarisasi, pengamanan, pemeliharaan, dan
                        penyelamatan. Setiap warga negara dapat berperan aktif dalam pemajuan kebudayaan. </p>
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->

<section class="list-konten py-10 relative">
    <img class="collection-two__bg" src="{{ asset('assets/images/backgrounds/huruf-lontara2.png') }}" alt="">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk1.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Tradisi Lisan" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Tradisi Lisan">Tradisi Lisan</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk2.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Manuskrip" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Manuskrip">Manuskrip</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk3.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Adat Istiadat" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Adat Istiadat">Adat Istiadat</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk4.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Ritus" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Ritus">Ritus</a>
                </h3>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk5.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Seni" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Seni">Seni</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk6.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Bahasa" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Bahasa">Bahasa</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk7.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Pengetahuan Tradisional" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Pengetahuan Tradisional">Pengetahuan Tradisional</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk8.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Teknologi Tradisional" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Teknologi Tradisional">Teknologi Tradisional</a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk9.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Permainan Rakyat" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Permainan Rakyat">Permainan Rakyat</a>
                </h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="image-card radius-medium">
                    <img src="{{ asset('assets/images/konten/konten-opk10.png') }}" alt="">
                    <a href="{{ route('opk') }}?kategori=Olahraga Tradisional" class="stretched-link"></a>
                </div>
                <h3>
                    <a href="{{ route('opk') }}?kategori=Olahraga Tradisional">Olahraga Tradisional</a>
                </h3>
            </div>
        </div>
    </div>
</section>

@endsection