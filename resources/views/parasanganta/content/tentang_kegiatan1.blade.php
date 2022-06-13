
@extends('layout.app')

@section('content')

@include('partials.header')


    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>Kegiatan</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="collection-two collection-two__collection-full-page">
        <div class="container-fluid">
            <div class="block-title-two text-center">
                <p>Gallery</p>
                <h3>Daftar <br> Kegiatan</h3>
            </div><!-- /.block-title-two -->
            <div class="collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme"
                data-options='{
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
                @foreach($foto as $a)


                <div class="item">
                    <div class="collection-two__single">
                        <div class="collection-two__image">
                            <img src="{{ asset('storage/assets/foto/thumbnail/' . $a->thumbnail) }}" alt="">
                        </div><!-- /.collection-two__image -->
                        <div class="collection-two__content">
                            <h3>{{$a->nama}}</h3>
                            <p>1885</p>
                            {{-- <a href="./parasanganta/konten-detail.html" class="stretched-link"></a> --}}
                          <a href="{{ route('kegiatan1_detail', $a->slug) }}" class="stretched-link"></a>

                        </div><!-- /.collection-two__content -->
                    </div><!-- /.collection-two__single -->
                </div><!-- /.item -->

                @endforeach





            </div><!-- /.collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme -->
        </div><!-- /.container-fluid -->
    </section><!-- /.collection-two -->

@endsection
