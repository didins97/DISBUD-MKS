<?php

namespace App\Http\Controllers\Parasanganta;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Situs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;



class SitusController extends Controller
{
    public function index(){
        
        $bangunan = Situs::where('status', 'publikasi')->orderBy('published_at', 'desc');
        // ->where('published_at', '<=', Carbon::now())
        

        $foto = $bangunan->paginate(6);

        // if( Paginator::resolveCurrentPage() != 1 ) {
        //     $fotos = [];
        //     $i = 0;
        //     foreach( $foto as $a ) {
        //         $fotos[$i]['nama'] = Session::get('lg') == 'en' ? $a->judul_english : $a->judul_indo;
        //         $fotos[$i]['thumbnail'] = $a->thumbnail;
        //         $j = 0;
        //         foreach( $a->kategori_show as $ks ) {
        //             $fotos[$i]['kategori_show'][$j] = $ks->isi;
        //             $j++;
        //         }
        //         $fotos[$i]['konten'] = Session::get('lg') == 'en' ? \Str::limit($a->konten_english, 50, $end='...') : \Str::limit($a->konten_indo, 50, $end='...');
        //         $fotos[$i]['slug'] = $a->slug;
        //         $fotos[$i]['penulis'] = $a->penulis != 'admin' ? $a->kontributor_relasi->nama : 'admin';
        //         $fotos[$i]['published_at'] = \Carbon\Carbon::parse($a->published_at)->isoFormat('D MMMM Y');
        //         $i++;
        //     }
        //     return response()->json([
        //         'status' => 'success', 
        //         'data' => $fotos
        //     ]);
        // } else {
        //     return view('content.tentang_bangunan', compact('foto'));
        // }

           return view('parasanganta.content.tentang_situs', compact('foto'));

    }

    public function show($slug)
    {
        $lg = Session::get('lg');

        $foto = Situs::where('slug', $slug)->firstOrFail();

        // check draft
        if( $foto->status == 'draft' && !isset(auth()->user()->id) ) {
            abort(404);
        }
        
        if( $lg == 'en' )
            return view('content_english.photo_detail', compact('foto'));

        return view('parasanganta.content.situs_detail', compact('foto'));
    }
    
}
