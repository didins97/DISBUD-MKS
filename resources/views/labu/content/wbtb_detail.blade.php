
@extends('labu.layout.app')

@section('content')

@include('labu.partials.header')

    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>WBTB</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="event-details">
        <div class="container">
            <div class="event-details__top">
                <p>{{ \Carbon\Carbon::parse($detail->published_at)->isoFormat('D MMMM Y'); }}</p>
                <h3>{{ $detail->judul }}</h3>
            </div><!-- /.event-details__top -->
            <div class="row high-gutter">
                <div class="col-lg-8 mb-4">
                    <div class="event-details__main">
                        <div class="event-details__image">
                            <img src="{{ asset('storage/assets/foto/thumbnail/' . $detail->thumbnail) }}" alt="" class="radius-medium">
                        </div><!-- /.event-details__image -->
                        <div class="event-details__content">
                            {!!$detail->isi !!}
                        </div><!-- /.event-details__content -->
                    </div><!-- /.event-details__main -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar radius-medium">
                        <div class="sidebar__single">
                            <h3 class="sidebar__title title-underline">WBTB Lainnya</h3>
                            <div class="sidebar__post">
                                @foreach($konten_labu as $a)
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('storage/assets/foto/thumbnail/' . $a->thumbnail) }}" alt="OPK"
                                            class="radius-medium">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <h3><a href="{{ route('opk_detail', $a->slug) }}" class="text-medium">{{ $a->judul }}</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                                @endforeach
                            </div><!-- /.sidebar__post -->
                        </div><!-- /.sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-12 mt-5 event-details__content">
                    <h3>Galeri</h3>
                    <div class="grid-gallery mt-4" id="galleries">
                        @for( $i = 0; $i < count(unserialize($detail->galleries)); $i++ )
                        <!-- <div class="item-gallery"> -->
                        <a href="{{ asset('storage/assets/foto/galleries/' . unserialize($detail->galleries)[$i]) }}" class="item-gallery">
                            <img src="{{ asset('storage/assets/foto/galleries/' . unserialize($detail->galleries)[$i]) }}" />
                        </a>
                        <!-- </div> -->
                        @endfor
                        <div class="placeholder"></div>
                    </div>
                </div>
                @php
                $konten_name = 'wbtb';
                $konten = $detail;
                @endphp
                @include('labu.partials.social-share')
                <div class="col-lg-12 mt-5">
                    <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.event-details -->

@endsection
