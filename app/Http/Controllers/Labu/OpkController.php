<?php

namespace App\Http\Controllers\Labu;

use App\Http\Controllers\Controller;
use App\Models\KontenLabu;
use Illuminate\Http\Request;

class OpkController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->has('kategori')) return view('labu.content.opk');

        $kategori = $request->kategori;
        $konten_labu = KontenLabu::whereHas('kategori_opk', function($query) use ($kategori) {
            $query->where('isi', $kategori);
        })->paginate(6);

        return view('labu.content.opk_show', compact('konten_labu', 'kategori'));
    }

    public function show($slug)
    {
        $detail = KontenLabu::where('slug', $slug)->firstOrFail();

        // check draft
        if( $detail->status == 'draft' && !isset(auth()->user()->id) ) {
            abort(404);
        }

        $konten_labu = KontenLabu::where('status', 'publikasi')->where('id', '!=', $detail->id)->orderBy('published_at', 'desc')->take(3)->get();

        return view('labu.content.opk_detail', compact('detail', 'konten_labu'));
    }
}
