<?php

namespace App\Http\Controllers\Labu;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $artikel = Artikel::where('status', 'publikasi')->where('kategori', 'umum')->orderBy('published_at', 'desc')->paginate(6);

        return view('labu.content.artikel', compact('artikel'));
    }

    public function index_hk(Request $request)
    {
        $artikels = Artikel::where('kategori', 'Hari Kebudayaan')->where('status', 'publikasi')->orderBy('published_at', 'desc')->paginate(3);

        return view('labu.content.index_hk', compact('artikels'));
    }

    public function index_kb(Request $request)
    {
        $artikels = Artikel::where('kategori', 'Kampung Budaya')->where('status', 'publikasi')->orderBy('published_at', 'desc')->paginate(3);

        return view('labu.content.index_kb', compact('artikels'));
    }

    public function show($slug)
    {
        $detail = Artikel::where('slug', $slug)->firstOrFail();

        // check draft
        if( $detail->status == 'draft' && !isset(auth()->user()->id) ) {
            abort(404);
        }

        $artikelTerbaru = Artikel::where('status', 'publikasi')->where('id', '!=', $detail->id)->orderBy('published_at', 'desc')->take(5)->get();

        return view('labu.content.artikel_detail', compact('detail', 'artikelTerbaru'));
    }
}
