
@extends('layout.app')

@section('content')

@include('partials.header')


    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>BANGUNAN</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="collection-two collection-two__collection-full-page">
        <div class="container">
            <div class="block-title-two text-center">
                <p>Gallery</p>
                <h3>Daftar <br> Bangunan Bersejarah</h3>
            </div><!-- /.block-title-two -->
            <div class="row">
                @foreach($foto as $a)

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="collection-two__single">
                        <div class="collection-two__image konten-list-card">
                            <div class="layer-mask"></div>
                            <img src="{{ asset('storage/assets/foto/thumbnail/' . $a->thumbnail) }}" alt="">
                            <div class="row collection-two__image__info konten-list-card__info">
                                <div class="col-12 text-center">
                                    <h3>{{$a->nama}}</h3>
                                    <p>{{$a->tahun}}</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('bangunan_detail', $a->slug) }}" class="stretched-link"></a>
                    </div>
                </div>

                @endforeach
            </div>
            
        </div><!-- /.container-fluid -->
    </section><!-- /.collection-two -->

@endsection
