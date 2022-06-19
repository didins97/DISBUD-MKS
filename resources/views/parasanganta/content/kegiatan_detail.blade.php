@extends('layout.app')

@section('content')

@include('partials.header')


    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>EVENT</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-one blog-details-page relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details__main">
                        <ul class="blog-one__meta list-unstyled">
                            <li class="text-uppercase">{{ \Carbon\Carbon::parse($kegiatan->published_at)->isoFormat('D MMMM Y'); }}</li>
                        </ul><!-- /.blog-one__meta list-unstyled -->
                        <h3>{{$kegiatan->judul_indo}}</h3>
                        <br>
                        <div class="blog-details__image">
                            <img src="{{ asset('storage/assets/kegiatan/thumbnail/' . $kegiatan->thumbnail) }}" class="img-fluid" alt="">
                        </div><!-- /.blog-details__image -->
                        {!!$kegiatan->konten_indo!!}
                        <br>
                    </div><!-- /.blog-details__main -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="event-details__booking mt-20">
                        <div class="event-details__booking__wrap p-5">
                            <ul class="event-details__booking-info list-unstyled mb-4">
                                <li>
                                    <span>DATE:</span>
                                    {{$kegiatan->date_event}}
                                </li>
                                <li>
                                    <span>TIME:</span>
                                    {{$kegiatan->time_event}}
                                </li>
                                <li>
                                    <span>VENUE:</span>
                                    {{$kegiatan->venue}}
                                </li>
                            </ul><!-- /.event-details__booking-info list-unstyled -->
                        </div>
                    </div><!-- /.event-details__booking -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <img src="assets/images/backgrounds/huruf-lontara-satuan-3.svg" alt="" class="bg-lontara-four">
    </section><!-- /.blog-one blog-grid-page -->


    @endsection
