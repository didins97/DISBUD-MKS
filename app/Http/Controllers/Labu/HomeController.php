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

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if( request()->get('search') != null ) {
            $artikel = Artikel::where('status', 'publikasi')->where('judul_indo', 'LIKE', request()->get('search'))->orderBy('published_at', 'desc');
        } else {
            $artikel = Artikel::where('status', 'publikasi')->orderBy('published_at', 'desc');
        }

        $artikel = $artikel->where('published_at', '<=', Carbon::now())->where('kategori', 'Umum')->take(3)->get();

        return view('labu.content.home', compact('artikel'));

    }


}
