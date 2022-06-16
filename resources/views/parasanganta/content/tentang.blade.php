
@extends('layout.app')

@section('content')

@include('partials.header')


    <section class="page-header"
        style="background-image: url( {{ asset('assets/images/backgrounds/musium-kota-makassar.jpg') }}); background-size: cover; background-position: center;">
        <div class="container">
            <h2>TENTANG</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="about-four">
        <div class="container">
            <div class="about-four__image wow fadeInRight mr-0" data-wow-duration="1500ms">
                <img src="assets/images/about/about-1.png" alt="">
            </div><!-- /.about-four__image -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-four__content">
                        <div class="block-title">
                            <p>Tentang Disbud</p>
                            <h3 class="">Dinas Kebudayaan Makassar</h3>
                        </div>
                        <!-- <div class="about-four__highlite-text">
                            <p>Dinas Kebudayaan Kota Makassar merupakan salah satu Perangkat Daerah yang menyelenggarakan urusan pemerintahan dalam bidang kebudayaan. Kedudukan dinas tersebut merupakan unsur pelaksana urusan pemerintahan yang menyelenggarakan bidang kebudayaan yang diatur dalam Peraturan Daerah Kota Makassar Nomor 08 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kota Makassar..</p>
                        </div> -->
                        <p>Dinas Kebudayaan Kota Makassar merupakan salah satu Perangkat Daerah yang menyelenggarakan urusan pemerintahan dalam bidang kebudayaan. Kedudukan dinas tersebut merupakan unsur pelaksana urusan pemerintahan yang menyelenggarakan bidang kebudayaan yang diatur dalam Peraturan Daerah Kota Makassar Nomor 08 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kota Makassar.</p>
                        <p>Perangkat Daerah Dinas Kebudayaan Kota Makassar mempunyai tugas pokok yaitu membantu Walikota melaksanakan urusan pemerintahan bidang kebudayaan yang menjadi kewenangan daerah dan tugas pembantuan yang ditugaskan kepada daerah. Untuk melaksanakan tugas pokok sebagaimana dimaksud, Dinas Kebudayaan mempunyai fungsi sebagai berikut:.</p>
                        <p>
                            <ul>
                                <li>Perumusan kebijakan penyelenggaraan Urusan Pemerintahan bidang kebudayaan;</li>
                                <li>Pelaksanaan kebijakan Urusan Pemerintahan bidang kebudayaan;</li>
                                <li>Pelaksanaan evaluasi dan pelaporan Urusan Pemerintahan bidang kebudayaan;</li>
                                <li>Pelaksanaan administrasi dinas Urusan Pemerintahan bidang kebudayaan;</li>
                            </ul>
                        </p>
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
                            <img src="assets/images/about/histori-1.png" alt="">
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
                            <img src="assets/images/about/histori-2.png" alt="">
                        </div><!-- /.history-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex">
                        <div class="history-one__content my-auto">
                            <div class="history-one__top block-title">
                                <!-- <p class="fw-bold">MISI</p> -->
                                <h3>MISI KAMI</h3>
                            </div><!-- /.history-one__top block-title -->
                            <p>
                                <ul>
                                    <li>Peningkatan kapasitas kelembagaan Dinas Kebudayaan Kota Makassar</li>
                                    <li>Mewujudkan pelestarian nilai-nilai sejarah tradisi dan cagar budaya</li>
                                    <li>Mewujudkan sarana dan prasarana yang handal dan mendukung pembangunan dan pelestarian budaya</li>
                                    <li>Mewujudkan museum kota sebagai museum representative di kenal masyarakat dunia dan menjadi salah satu pusat budaya Kota Makassar</li>
                                    <li>Mewujudkan dinas kebudayaan makassar yang dinamis yang dapat dibanggakan oleh masyarakat dan dunia melalui internalisasi dan penguatan diplomasi budaya serta meningkatkan pelestarian warisan budaya dan mempertahankan unsur budaya</li>
                                </ul>
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

            <div class="row">
                <div class="col-lg-4">
                    <p class="about-one__highlighted-text">Cagar Budaya adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya</p>
                    <!-- /.about-one__highlighted-text -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <p>Cagar Budaya adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya, Bangunan Cagar Budaya, Struktur Cagar Budaya, Situs Cagar Budaya, dan Kawasan Cagar Budaya di darat dan/atau di air yang perlu dilestarikan keberadaannya karena memiliki nilai penting bagi sejarah, ilmu pengetahuan, pendidikan, agama, dan/atau kebudayaan melalui proses penetapan.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <p>Sesuatu dapat dikatakan Cagar Budaya jika memiliki nilai penting bagi sejarah, ilmu pengetahuan, pendidikan, agama, dan/atau kebudayaan. Kata penghubung “dan/atau” bermakna tidak berlaku komulatif. Artinya kelima nilai penting tersebut boleh dimiliki seluruhnya atau salah satu oleh suatu Cagar Budaya. Penentuan nilai penting ini dilakukan berdasarkan kajian mendalam oleh Tim Ahli Cagar Budaya dibantu oleh lembaga yang berhubungan dengan kebudayaan.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
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
                <a href="#" class="thm-btn cta-one__btn-two btn-pill">Download</a>
                <!-- /.thm-btn cta-one__btn-two -->
            </div>
            <!-- /.cta-one__btn-block -->
        </div>
        <!-- /.container -->
    </section>
    @endsection
