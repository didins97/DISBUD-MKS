
@extends('layout.app')

@section('content')

@include('partials.header')


    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>EVENT</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="event-three relative">
        <img src="assets/images/backgrounds/huruf-lontara-satuan-1.svg" alt="" class="bg-lontara-one">
        <img src="assets/images/backgrounds/huruf-lontara-satuan-2.svg" alt="" class="bg-lontara-two">
        <div class="container">

            <div class="d-grid events">
                @foreach($kegiatan as $k)
                <div class="event-card">
                    <div class="event-three__image">
                        <img src="{{ asset('storage/assets/kegiatan/thumbnail/' . $k->thumbnail) }}" alt="">
                    </div><!-- /.event-three__image -->
                    <div class="event-three__content event-content">
                        <span class="event-date">{{$k->date_event}}</span>
                        <h3><a href="{{route('event_detail', $k->slug)}}">{{$k->judul_indo}}</a>
                        </h3>
                        <p><i class="fa fa-map-marker-alt"></i> Kota Makassar</p>
                        <a href="{{route('event_detail', $k->slug)}}"
                            class="thm-btn event-three__btn btn-pill">Details</a>
                        <!-- /.thm-btn event-three__btn -->
                    </div><!-- /.event-three__content -->
                </div><!-- /.event-three__single -->

                @endforeach
            </div>
            {{$kegiatan->links('partials.pagination')}}

            {{-- <div class="text-center d-flex justify-content-center">
                <div class="post-pagination mt-10">
                    <a href="#" class="page"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="page">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <a href="#" class="page"><i class="fa fa-angle-right"></i></a>
                </div><!-- /.post-pagination -->
            </div><!-- /.text-center d-flex justify-content-center -->
        </div><!-- /.container -->
    </section><!-- /.event-three --> --}}

    @endsection
