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
    public function cetak(Request $request){
    
        $req = $request->cetak;

            $bangunan = Bangunan::all();
            $benda = Benda::all();
            $kawasan = Kawasan::all();
            $kegiatan1 = Kegiatan1::all();
            $situs = Situs::all();
            $struktur= Struktur::all();

            $cetak = $bangunan->mergeRecursive($benda)->mergeRecursive($kawasan)
                    ->mergeRecursive($kegiatan1)->mergeRecursive($situs)
                    ->mergeRecursive($struktur);

            return view('admin.content.cetak', compact('cetak', 'req'));


    }
}
