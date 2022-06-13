<?php

namespace App\Http\Controllers\Parasanganta;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Pagination\paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

use App\Models\Artikel;
use App\Models\Foto;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Bangunan;
use App\Models\Benda;
use App\Models\Kawasan;
use App\Models\Publikasi;
use App\Models\Kegiatan;
use App\Models\Kegiatan1;
use App\Models\Kerjasama;
use App\Models\Situs;
use App\Models\Struktur;
use CreateFotoKategoriShow;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');

        $search_condition = ($search != null);
        $lg = (Session::get('lg') == 'en') ? 'english' : 'indo';

        $artikel = Artikel::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('judul_' . $lg , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();
        $benda = Benda::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('nama'  , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();
        $bangunan = Bangunan::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('nama'  , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('judul_english', '!=', null);
        })->get();
        $situs = Situs::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('nama' , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();
        $kawasan = Kawasan::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('nama' , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();
        $struktur = Struktur::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('nama'  , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();
        $kegiatan1 = Kegiatan1::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('nama'  , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();
        $kegiatan = Kegiatan::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('judul_' . $lg , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();

        $foto = Foto::when($search_condition, function($query) use ($search, $lg) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('judul_' . $lg , 'LIKE', '%'.$search . '%');
        })->when($lg == 'english', function($query) use ($lg, $search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('judul_english', '!=', null);
        })->get();

        $artikel = $this->paginate($artikel->mergeRecursive($kawasan)->mergeRecursive($struktur)->mergeRecursive($kegiatan1)->mergeRecursive($kegiatan)->mergeRecursive($benda)->mergeRecursive($bangunan)->mergeRecursive($situs)->mergeRecursive($foto), 9);
        $artikel->setPath('cari?search=' . $search);


        if( Session::get('lg') == 'en' )
            return view('content_english.search_content', compact('artikel'));
    

        return view('parasanganta.content.search_content', compact('artikel'));
    }

    private function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
