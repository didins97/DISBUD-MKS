@extends('layout.app')

@section('content')

@include('partials.header')


<section class="page-header" style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
    <div class="container">
        <h2>TENTANG</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-four">
    <div class="container">
        <div class="about-four__image wow fadeInRight mr-0" data-wow-duration="1500ms">
            <img src="assets/images/about/kadis.jpg" alt="">
            <div class="team-one__content">
                <h3>Ir. Andi Herfida Attas</h3>
                <p>Kepala Dinas Kebudayaan Kota Makassar</p>
            </div>
        </div><!-- /.about-four__image -->
        <div class="row">
            <div class="col-lg-6">
                <div class="about-four__content">
                    <div class="block-title">
                        <p>Tentang Disbud</p>
                        <h3 class="">Dinas Kebudayaan Makassar</h3>
                    </div>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div><!-- /.about-four__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-four -->

<section class="history-one relative bg-gray">
    <img src="assets/images/backgrounds/huruf-lontara-satuan-4.svg" alt="" class="bg-lontara-five">
    <img src="assets/images/backgrounds/huruf-lontara-satuan-5.svg" alt="" class="bg-lontara-six">
    <div class="container">
        <div></div>
        <div class="history-one__single">
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="assets/images/about/histori-2.jpg" alt="">
                    </div><!-- /.history-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="history-one__content my-auto">
                        <div class="history-one__top block-title">
                            <!-- <p class="fw-bold">VISI</p> -->
                            <h3>VISI KAMI</h3>
                        </div><!-- /.history-one__top block-title -->
                        <p class="mt-3" style="color: #252930">Terwujudnya Kota Makassar yang Berbudaya.</p>
                    </div><!-- /.history-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.history-one__single -->
        <div class="history-one__single">
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="assets/images/about/histori-1.jpg" alt="">
                    </div><!-- /.history-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="history-one__content my-auto">
                        <div class="history-one__top block-title">
                            <!-- <p class="fw-bold">MISI</p> -->
                            <h3>MISI KAMI</h3>
                        </div><!-- /.history-one__top block-title -->
                        <p>
                        <ol>
                            <li>Peningkatan kapasitas kelembagaan Dinas Kebudayaan Kota Makassar</li>
                            <li>Mewujudkan pelestarian nilai-nilai sejarah tradisi dan cagar budaya</li>
                            <li>Mewujudkan sarana dan prasarana yang handal dan mendukung pembangunan dan pelestarian budaya</li>
                            <li>Mewujudkan museum kota sebagai museum representative di kenal masyarakat dunia dan menjadi salah satu pusat budaya Kota Makassar</li>
                            <li>Mewujudkan dinas kebudayaan makassar yang dinamis yang dapat dibanggakan oleh masyarakat dan dunia melalui internalisasi dan penguatan diplomasi budaya serta meningkatkan pelestarian warisan budaya dan mempertahankan unsur budaya</li>
                        </ol>
                        </p>
                    </div><!-- /.history-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.history-one__single -->
    </div><!-- /.container -->
</section><!-- /.history-one -->

<section class="about-one about-one__membership relative mt-3">
    <img src="assets/images/about/about-2.png" class="history-one__sculp" alt="" width="200px">
    <div class="container">
        <div class="block-title">
            <h3 class="">Tentang Cagar Budaya</h3>
        </div><!-- /.block-title -->

        <p>Cagar Budaya adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya, Bangunan Cagar Budaya, Struktur Cagar Budaya, Situs Cagar Budaya, dan Kawasan Cagar Budaya di darat dan/atau di air yang perlu dilestarikan keberadaannya karena memiliki nilai penting bagi sejarah, ilmu pengetahuan, pendidikan, agama, dan/atau kebudayaan melalui proses penetapan.</p>
    </div><!-- /.container -->
</section><!-- /.about-one -->

<section class="cta-one" style="background-image: url(assets/images/shapes/cta-bg-1-1.jpg);">
    <div class="container text-center">
        <h3>Peraturan & Regulasi</h3>
        <p>
            Baca peraturan dan regulasi yang dikeluarkan Pemerintah untuk melestarikan Cagar Budaya dan <br>
            informasi seputar cagar budaya lainnya
        </p>
        <div class="cta-one__btn-block">
            <a target="_blank" href="https://jdih.kemdikbud.go.id/arsip/UU_Tahun2010_Nomor11.pdf" class="thm-btn cta-one__btn-two btn-pill">Download</a>
            <!-- /.thm-btn cta-one__btn-two -->
        </div>
        <!-- /.cta-one__btn-block -->
    </div>
    <!-- /.container -->
</section>
@endsection
