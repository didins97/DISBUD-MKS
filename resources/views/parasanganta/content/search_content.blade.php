@extends('layout.app')

@section('content')



@include('partials.header')
        <section class="page-header"
        style="background-image: url(assets/images/backgrounds/musium-kota-makassar.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <h2>PENCARIAN</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="event-three relative">
        <img src="assets/images/backgrounds/huruf-lontara-satuan-1.svg" alt="" class="bg-lontara-one">
        <img src="assets/images/backgrounds/huruf-lontara-satuan-2.svg" alt="" class="bg-lontara-two">
        <div class="container">
            <div class="block-title mb-5">
                <p class="text-regular keyword-search">keyword “{{$search}}”</p>
            </div><!-- /.block-title -->

            <div class="block-title mb-4">
                <h3 class="text-regular">Hasil</h3>
            </div><!-- /.block-title -->

            <div class="row">
                @foreach($artikel as $a)
                    @if($a->getTable()=='bangunans')



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
                                <h3><a href="./parasanganta/artikel-detail.html">{{$a->nama}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ route('bangunan_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='kawasans')
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
                                <h3><a href="./parasanganta/artikel-detail.html">{{$a->nama}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ route('kawasan_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='kegiatan1s')
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
                                <h3><a href="./parasanganta/artikel-detail.html">{{$a->nama}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ route('kegiatan1_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='strukturs')
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
                                <h3><a href="./parasanganta/artikel-detail.html">{{$a->nama}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ route('struktur_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='situses')
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
                                <h3><a href="./parasanganta/artikel-detail.html">{{$a->nama}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ route('situs_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='bendas')
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
                                <h3><a href="./parasanganta/artikel-detail.html">{{$a->nama}}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten, 100) !!}</p>
                                <a href="{{ route('benda_detail', $a->slug) }}" class="blog-one__link">Selengkapnya</a>
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
                                <h3><a href="{{route('article_detail',$a->slug)}}">{{ $a->judul_indo }}</a>
                                </h3>
                                <p>{!! Str::limit($a->konten_indo, 100) !!}</p>
                                <a href="{{route('article_detail',$a->slug)}}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='kegiatans')
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{ asset('storage/assets/kegiatan/thumbnail/' . $a->thumbnail) }}" alt="">
                                <div class="blog-one__date">
                                    <i class="far fa-calendar-alt"></i>
                                     {{ \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y'); }}
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li><a href="javascript:;">By {{$a->penulis}}</a></li>
                                </ul>
                                <h3><a href="{{route('article_detail',$a->slug)}}">{{ $a->nama }}</a>
                                </h3>
                                <p>{!! Str::limit($a->nama, 100) !!}</p>
                                <a href="{{route('event_detail',$a->slug)}}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @elseif($a->getTable()=='fotos')
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
                                <h3><a href="{{route('article_detail',$a->slug)}}">{{ $a->judul_indo }}</a>
                                </h3>
                                <p>{!! Str::limit($a->nama, 100) !!}</p>
                                <a href="{{route('event_detail',$a->slug)}}" class="blog-one__link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach


            </div><!-- /.row -->


            {!! $artikel->links('parasanganta.vendor.pagination.custom') !!}

        </div><!-- /.container -->


    </section><!-- /.event-three -->
    @endsection
