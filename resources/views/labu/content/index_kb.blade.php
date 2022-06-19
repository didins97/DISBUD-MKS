@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/bg-header.jpg') }}); background-size: cover; background-position: center;">
    <div class="container">
        <h2>Kampung Budaya</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-four relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about-four__content">
                    <div class="block-title mb-3">
                        <p class="hidden">Apa Itu Kampung Budaya/Lorong Wisata?</p>
                        <h3>Kampung Budaya</h3>

                    </div><!-- /.block-title -->
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Kampung budaya memiliki pengertian sebagai wilayah atau desa yang memiliki potensi kebudayaan untuk dikembangkan.</p>
                            <div class="block-title mb-3 mt-5">
                                <h3>Lorong Wisata</h3>
                            </div><!-- /.block-title -->
                            <div class="row">
                                <div class="col-lg-10">
                                    <p>Lorong wisata merupakan sebuah lorong di pemukiman padat penduduk yang dikreasikan menjadi sebuah tempat wisata lokal kekinian dengan berbagai lukisan mural yang tentunya menjadi incaran warga Makassar yang suka berswafoto.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="image_before_tr wow fadeInRight mr-0 radius-medium" data-wow-duration="1500ms">
                                <img class="radius-medium" src="{{ asset('assets/images/konten/konten-kblw.jpg') }}" alt="" width="500px">
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
                        <h3 class="article_title"><a href="{{route('article_labu_detail', $a->slug)}}">{{$a->judul_indo}}</a>></h3>
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