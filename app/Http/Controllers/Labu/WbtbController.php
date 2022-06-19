<?php

namespace App\Http\Controllers\Labu;

use App\Http\Controllers\Controller;
use App\Models\KontenLabu;
use Illuminate\Http\Request;

class WbtbController extends Controller
{
    public function index(Request $request)
    {
        $konten_labu = KontenLabu::where('is_wbtb', 1)->where('status', 'publikasi')->orderBy('published_at', 'desc')->paginate(6);

        return view('labu.content.wbtb', compact('konten_labu'));
    }

    public function show($slug)
    {
        $detail = KontenLabu::where('slug', $slug)->firstOrFail();

        // check draft
        if( $detail->status == 'draft' && !isset(auth()->user()->id) ) {
            abort(404);
        }

        $konten_labu = KontenLabu::where('status', 'publikasi')->where('id', '!=', $detail->id)->where('is_wbtb', 1)->orderBy('published_at', 'desc')->take(3)->get();

        return view('labu.content.wbtb_detail', compact('detail', 'konten_labu'));
    }
}
