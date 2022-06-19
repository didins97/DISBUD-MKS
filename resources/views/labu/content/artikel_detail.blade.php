@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>ARTIKEL</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-one blog-details-page relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="blog-details__main">
                        <div class="blog-details__image">
                            <img src="{{ asset('storage/assets/artikel/thumbnail/' . $detail->thumbnail) }}" class="img-fluid" alt="">
                        </div><!-- /.blog-details__image -->
                        <ul class="blog-one__meta list-unstyled">
                            <li><a href="javascript:;" class="text-uppercase">Oleh <span class="text-bold">{{ $detail->penulis != 'admin' ? $detail->kontributor_relasi->nama : 'admin' }}</span></a></li>
                            <li class="text-uppercase"> {{ \Carbon\Carbon::parse($detail->published_at)->isoFormat('D MMMM Y'); }}</li>
                        </ul><!-- /.blog-one__meta list-unstyled -->
                        <h3>{{ $detail->judul_indo }}</h3>
                        <br>
                        <p>{!!$detail->konten_indo !!}</p>

                        <p class="blog-details__tags">
                            <span class="text-medium">Keyword: </span><a href="javascript:;" class="text-medium">Bangunan,
                            </a><a href="javascript:;" class="text-medium">Cagar
                                Budaya</a>
                        </p><!-- /.blog-details__tags -->

                    </div><!-- /.blog-details__main -->
                </div><!-- /.col-lg-8 -->

                <div class="col-lg-5">
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
                                        <a class="sidebar__post-date" href="{{route('article_labu_detail', $a->slug)}}">
                                            {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                                        </a>
                                        <h3><a href="{{route('article_labu_detail', $a->slug)}}">{{$a->judul_indo}}</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                                @endforeach
                            </div><!-- /.sidebar__post -->
                        </div><!-- /.sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                @php
                $konten_name = 'article_labu';
                $konten = $detail;
                @endphp
                @include('labu.partials.social-share')
                <div class="col-lg-12 mt-5">
                    <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-grid-page -->

@endsection
