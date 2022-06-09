<?php

namespace App\Http\Controllers\Parasanganta;

use App\Http\Controllers\Controller;

use App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriShow;


class BendaController extends Controller
{
    public function index(){
        $kategori = KategoriShow::where('isi', 'Benda')->first();
        $artikel = $kategori->artikel->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $foto = $kategori->foto->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $audio = $kategori->audio->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $video = $kategori->video->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $publikasi = $kategori->publikasi->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $kerjasama = $kategori->kerjasama->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $kegiatan = $kategori->kegiatan->filter(function($item) {
            return $item->status == 'publikasi' && $item->published_at <= \Carbon\Carbon::now();
        });
        $artikel = $artikel->mergeRecursive($foto)->mergeRecursive($audio)->mergeRecursive($video)->mergeRecursive($publikasi)->mergeRecursive($kerjasama)->mergeRecursive($kegiatan);

        // $artikel = ( $kategori != null )
        // ? $this->paginate($artikel, 9)
        // : [];

        // $artikel->setPath('/tentang-benda');

        return view('parasanganta.content.tentang_benda', compact('artikel'));


    }
}
