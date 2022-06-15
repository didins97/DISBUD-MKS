<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name'); }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/card-hover.css') }}">

</head>

<body>
    <div class="canvas-wrapper">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('parasanganta') }}" class="canvas">
                    <div class="canvas_border">
                        <svg>
                            <defs>
                                <linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:rgb(253,137,68);stop-opacity:1"></stop>
                                    <stop offset="100%" style="stop-color:rgb(153,75,23);stop-opacity:1"></stop>
                                </linearGradient>
                                <linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#D34F48"></stop>
                                    <stop offset="100%" stop-color="#772522"></stop>
                                </linearGradient>
                            </defs>
                            <rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
                        </svg>
                    </div>
                    <div class="canvas_img-wrapper">
                        <img class="canvas_img canvas_img_full" src="{{ asset('assets/images/card-hover/desa-juhu-min.jpg') }}" alt="">
                    </div>
                    <div class="canvas_copy canvas_copy--left">
                        <span class="canvas_copy_subtitle">WEBSITE</span>
                        <strong class="canvas_copy_title">PARASANGANTA</strong>
                        <span class="canvas_copy_details fw-bold">Sistem Informasi Cagar Budaya</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#"" class=" canvas">
                    <div class="canvas_border">
                        <svg>
                            <defs>
                                <linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:rgb(253,137,68);stop-opacity:1"></stop>
                                    <stop offset="100%" style="stop-color:rgb(153,75,23);stop-opacity:1"></stop>
                                </linearGradient>
                                <linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#D34F48"></stop>
                                    <stop offset="100%" stop-color="#772522"></stop>
                                </linearGradient>
                            </defs>
                            <rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
                        </svg>
                    </div>
                    <div class="canvas_img-wrapper">
                        <img class="canvas_img canvas_img_full" src="{{ asset('assets/images/card-hover/tari-kipas.jpg') }}" alt="">
                    </div>
                    <div class="canvas_copy">
                        <span class="canvas_copy_subtitle">WEBSITE</span>
                        <strong class="canvas_copy_title">LA'BU</strong>
                        <span class="canvas_copy_details fw-bold">Laman Budaya</span>
                    </div>
                </a>
            </div>
        </div>
        <img class="pattern" src="{{ asset('assets/images/card-hover/pattern-lontara.png') }}" alt="">
        <img class="pattern2" src="{{ asset('assets/images/card-hover/pattern-lontara.png') }}" alt="">
    </div>
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>