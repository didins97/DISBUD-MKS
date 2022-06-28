<?php

namespace App\Http\Controllers\Admin;

use App\Models\Benda;
use App\Models\Situs;
use App\Models\Kawasan;
use App\Models\Bangunan;
use App\Models\Struktur;
use App\Models\Kegiatan1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CetakKontenController extends Controller
{
    public function cetak(Request $request, $slug){
    
        $req = $request->cetak;

//             $bangunan = Bangunan::find($id);
//             $benda = Benda::find($id);
//             $kawasan = Kawasan::find($id);
//             $kegiatan1 = Kegiatan1::find($id);
//             $situs = Situs::find($id);
//             $struktur= Struktur::find($id);
// $cetak = $bangunan->mergeRecursive($benda)->toArray();
            $bangunan = Bangunan::all();
            $benda = Benda::all();
            $kawasan = Kawasan::all();
            $kegiatan1 = Kegiatan1::all();
            $situs = Situs::all();
            $struktur= Struktur::all();

            $cetak = $bangunan->mergeRecursive($benda)->mergeRecursive($kawasan)
                    ->mergeRecursive($kegiatan1)->mergeRecursive($situs)
                    ->mergeRecursive($struktur)->where('slug', $slug)->firstOrFail();
            // dd($cetak);

            return view('admin.content.cetakQr', compact('cetak', 'req'));
// return view('admin.content.cetakQr');

    }
}
