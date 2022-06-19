<?php

namespace App\Http\Controllers\Labu;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Models\Artikel;
use App\Models\Publikasi;
use App\Models\Foto;
use App\Models\Kegiatan;
use App\Models\Kerjasama;
use App\Models\Video;
use App\Models\Audio;

use Carbon\Carbon;

class OpkController extends Controller
{
    public function index(Request $request)
    {
        return view('labu.content.opk');
    }
}
