@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/bg-header.jpg') }}); background-size: cover; background-position: center;">
    <div class="container">
        <h2>ARTIKEL</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-one relative">
    <img src="{{ asset('assets/images/backgrounds/huruf-lontara-satuan-1.svg') }}" alt="" class="bg-lontara-one">
    <img src="{{ asset('assets/images/backgrounds/huruf-lontara-satuan-2.svg') }}" alt="" class="bg-lontara-two">
    <div class="container">
        <div class="row">
            @foreach( $artikel as $a )
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
                            <li><a href="javascript:;">{{ $a->penulis != 'admin' ? $a->kontributor_relasi->nama : 'admin' }}</a></li>
                        </ul>
                        <h3><a href="{{route('article_labu_detail',$a->slug)}}">{{ $a->judul_indo }}</a></h3>
                        <p>{!! Str::limit($a->konten_indo, 100) !!}</p>
                        <a href="{{route('article_labu_detail',$a->slug)}}" class="blog-one__link">Selengkapnya</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div><!-- /.row -->

        {{$artikel->links('partials.pagination')}}

    </div>
</section>
@endsection