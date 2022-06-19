@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')
        <section class="page-header"
        style="background-image: url(assets/images/backgrounds/musium-kota-makassar.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <h2>PENCARIAN</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="event-three relative">
        <img src="{{ asset('assets/images/backgrounds/huruf-lontara-satuan-1.svg') }}" alt="" class="bg-lontara-one">
        <img src="{{ asset('assets/images/backgrounds/huruf-lontara-satuan-2.svg') }}" alt="" class="bg-lontara-two">
        <div class="container">
            <div class="block-title mb-5">
                <p class="text-regular keyword-search">keyword “{{$search}}”</p>
            </div><!-- /.block-title -->

            <div class="block-title mb-4">
                <h3 class="text-regular">Hasil</h3>
            </div><!-- /.block-title -->

            <div class="row">
                @foreach($artikel as $a)
                    @if($a->getTable()=='konten_labu')
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{ asset('storage/assets/foto/thumbnail/' . $a->thumbnail) }}" alt="">
                                <div class="blog-one__date">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li><a href="javascript:;">By {{$a->penulis}}</a></li>
                                </ul>
                                <h3><a href="{{ $a->is_wbtb ? route('wbtb_detail', $a->slug) : route('opk_detail', $a->slug) }}">{{ $a->judul}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ $a->is_wbtb ? route('wbtb_detail', $a->slug) : route('opk_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='artikels')
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{ asset('storage/assets/artikel/thumbnail/' . $a->thumbnail) }}" alt="">
                                <div class="blog-one__date">
                                    <i class="far fa-calendar-alt"></i>
                                     {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li><a href="javascript:;">By {{$a->penulis}}</a></li>
                                </ul>
                                <h3><a href="{{route('article_labu_detail',$a->slug)}}">{{ $a->judul_indo }}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten_indo, 100) !!}</p>
                                <a href="{{route('article_labu_detail',$a->slug)}}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div><!-- /.row -->
            {{$artikel->links('partials.pagination')}}
        </div><!-- /.container -->
    </section><!-- /.event-three -->
    @endsection
