@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/bg-header.jpg') }}); background-size: cover; background-position: center;">
    <div class="container">
        <h2>OPK</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-four relative pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="about-four__content">
                    <div class="block-title">
                        <p class="hidden">Objek pemajuan Kebudayaan</p>
                        <h3>{{ $kategori }}</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->

<section class="list-konten py-10 relative">
    <img class="collection-two__bg" src="{{ asset('assets/images/backgrounds/huruf-lontara2.png') }}" alt="">
    <div class="container">
        <div class="row mb-4">
            @foreach($konten_labu as $a)

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="image-card radius-medium">
                        <img src="{{ asset('storage/assets/foto/thumbnail/' . $a->thumbnail) }}" alt="">
                        <a href="{{ route('opk_detail', $a->slug) }}" class="stretched-link"></a>
                    </div>
                    <h3>
                        <a href="{{ route('opk_detail', $a->slug) }}">{{ $a->judul }}</a>
                    </h3>
                </div>

            @endforeach
        </div>
        {{ $konten_labu->links('partials.pagination') }}
    </div>
</section>

@endsection