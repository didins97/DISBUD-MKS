@extends('layout.app')

@section('content')



@include('partials.header')




    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>ARTIKEL</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-one blog-details-page relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details__main">
                        <div class="blog-details__image">
                            <img src="{{ asset('storage/assets/artikel/thumbnail/' . $artikel->thumbnail) }}" class="img-fluid" alt="">
                        </div><!-- /.blog-details__image -->
                        <ul class="blog-one__meta list-unstyled">
                            <li><a href="#" class="text-uppercase">Oleh <span class="text-bold">Ahmad
                                        Irfandi</span></a></li>
                            <li class="text-uppercase">7 April 2021</li>
                        </ul><!-- /.blog-one__meta list-unstyled -->
                        <h3>{{ $artikel->judul_indo }}</h3>
                        <br>
                        <p>{!!$artikel->konten_indo !!}</p>

                        <p class="blog-details__tags">
                            <span class="text-medium">Keyword: </span><a href="#" class="text-medium">Bangunan,
                            </a><a href="#" class="text-medium">Cagar
                                Budaya</a>
                        </p><!-- /.blog-details__tags -->
                        
                    </div><!-- /.blog-details__main -->

                </div><!-- /.col-lg-8 -->
                @php
                    $konten_name = 'article';
                    $konten = $artikel;
                    @endphp
                @include('parasanganta.partials.social-share')
                <div class="col-lg-4">
                    <div class="sidebar radius-medium">
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">Artikel Terbaru</h3>
                            <div class="sidebar__post">
                                @foreach($artikelTerbaru as $a)
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('storage/assets/artikel/thumbnail/' . $a->thumbnail) }}" alt="Article 1">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <a class="sidebar__post-date" href="{{route('article_detail', $a->slug)}}">
                                            {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                                        </a>
                                        <h3><a href="{{route('article_detail', $a->slug)}}">{{$a->judul_indo}}</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                                @endforeach




                            </div><!-- /.sidebar__post -->
                        </div><!-- /.sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <img src="assets/images/backgrounds/huruf-lontara-bg-1.svg" alt="" class="bg-lontara-three">
    </section><!-- /.blog-one blog-grid-page -->

@endsection
