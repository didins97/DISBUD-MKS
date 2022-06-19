<?php

namespace App\Http\Controllers\Labu;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\KontenLabu;
use Illuminate\Http\Request;
use Illuminate\Pagination\paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');

        $search_condition = ($search != null);

        $artikel = Artikel::when($search_condition, function($query) use ($search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('judul_indo', 'LIKE', '%'.$search . '%');
        })->get();

        $konten_labu = KontenLabu::when($search_condition, function($query) use ($search) {
            $query->where('published_at', '<=', \Carbon\Carbon::now())->where('status', 'publikasi')->orderBy('published_at', 'desc')->where('judul'  , 'LIKE', '%'.$search . '%');
        })->get();

        $artikel = $this->paginate($artikel->mergeRecursive($konten_labu), 9);
        $artikel->setPath('labu/cari?search=' . $search);

        return view('labu.content.search_content', compact('artikel','search'));
    }

    private function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
