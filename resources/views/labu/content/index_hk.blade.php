
@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>Hari Kebudayaan</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="about-four relative" >
        <img src="{{ asset('assets/images/about/about-2.png') }}" class="badik_content" alt="">
        <div class="garis_vertical"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-four__content">
                        <div class="block-title">
                            <p class="hidden">Perayaan hari kebudayaan</p>
                            <h3>Hari Kebudayaan Kota Makassar</h3>

                        </div><!-- /.block-title -->
                        <div class="row">
                            <div class="col-lg-10">
                                <p>Ditetapkan pada tanggal 1 April setiap tahunnya. Mengapa harus
                                    tanggal 1
                                    April? Karena
                                    pada tanggal 1 April 1906 adalah hari pembentukan Gameente (Kota Makassar), hari
                                    dimana
                                    Makassar sebagai ibu kota provinsi Sulawesi Selatan menggantikan Ujungpandang
                                    sejak 1
                                    April 1999 .</p>
                            </div>
                            <div class="col-lg-2">
                                <div class="image_before_tr wow fadeInRight mr-0" data-wow-duration="1500ms">
                                    <img src="{{ asset('assets/images/konten/konten-hk1.png') }}" alt="">
                                </div><!-- /.about-four__image -->
                            </div>
                        </div>
                    </div><!-- /.about-four__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-four -->

    <section class="article py-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    @foreach($artikels as $a)
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <img src="{{ asset('storage/assets/artikel/thumbnail/' . $a->thumbnail) }}" alt="artikel" class="article_img">
                        </div>
                        <div class="col-lg-8 py-4">
                            <span class="article_date">{{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}</span>
                            <h3 class="article_title"><a href="{{route('article_labu_detail', $a->slug)}}">{{$a->judul_indo}}</a></h3>
                            <p class="article_desc">{!! Str::limit($a->konten_indo, 100) !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{$artikels->links('partials.pagination')}}
        </div>
    </section>

@endsection
