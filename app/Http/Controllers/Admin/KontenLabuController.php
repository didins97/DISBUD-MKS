<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bangunan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Alert;
use App\Models\KategoriOpk;
use App\Models\KontenLabu;

class KontenLabuController extends Controller
{
    public function index(){
        $konten_labu = KontenLabu::orderBy('created_at', 'desc')->get();
        return view('admin.content.konten_labu.index', compact('konten_labu'));
    }

    public function add()
    {
        $kategori_opk = KategoriOpk::all();
        return view('admin.content.konten_labu.add', compact('kategori_opk'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'thumbnail' => 'required|max:10000|mimes:png,jpg,jpeg',
            'galleries_foto' => 'required'
        ]);

        // UPLOAD THUMBNAIL
        $thumbnail = $request->file('thumbnail');
        $filename_thumbnail = upload_file('app/public/assets/foto/thumbnail', $thumbnail);

        // UPLOAD FILE SLIDER UTAMA(NULLABLE)
        if( $request->has('galleries') ) {
            $galleries = $request->file('galleries');
            $filename_galleries = upload_file('app/public/assets/foto/galleries', $galleries);
        } else {
            $filename_galleries = null;
        }

        // UPLOAD SLIDER FOTO
        foreach( $request->file('galleries_foto') as $galleries_foto ) {
            $filename_galleries_foto = upload_file('app/public/assets/foto/galleries', $galleries_foto);
            $galleries_foto_array[] = $filename_galleries_foto;
        }

        $galleries_foto_array = serialize( $galleries_foto_array);

        $konten = KontenLabu::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'meta' => $request->meta,
            'keywords' => $request->keywords,
            'thumbnail' => $filename_thumbnail,
            'penulis' => ($request->contributor != null && $request->id_kontributor != null) ? 'kontributor umum/pamong budaya' : 'admin',
            'galleries' => $galleries_foto_array,
            'caption_galleries' => serialize($request->caption_galleries_foto),
            'galleries_file' => $request->slider_utama != null ? $filename_galleries : null,
            'slider_utama' => $request->slider_utama != null ? 1 : 0,
            'is_wbtb' => $request->is_wbtb != null ? $request->is_wbtb : 1,
            'status' => $request->publish != null ? 'publikasi' : 'draft',
            'published_at' => $request->publish_date . " " . $request->publish_time
        ]);

        // ATTACH KATEGORI opk
        $konten->kategori_opk()->attach($request->kategori_opk);

        Alert::success('Berhasil', 'Konten Labu berhasil ditambahkan');

        return redirect()->route('admin.konten_labu.index');
    }

    public function edit($id)
    {
        $konten = KontenLabu::findOrFail($id);
        $kategori_opk = KategoriOpk::all();

        return view('admin.content.konten_labu.edit', compact('konten', 'kategori_opk'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $konten = KontenLabu::findOrFail($id);

        if( $request->has('thumbnail') ) {
            $this->validate($request, [
                'thumbnail' => 'required|max:10000|mimes:png,jpg,jpeg',
            ]);
            // UPLOAD THUMBNAIL
            $thumbnail = $request->file('thumbnail');
            $filename_thumbnail = upload_file('app/public/assets/foto/thumbnail', $thumbnail);

            File::delete(storage_path('app/public/assets/foto/thumbnail', $konten->thumbnail));
        } else {
            $filename_thumbnail = $konten->thumbnail;
        }


        // UPLOAD FILE SLIDER UTAMA(NULLABLE)
        if( $request->has('slider') ) {
            $galleries = $request->file('slider');
            $filename_galleries = upload_file('app/public/assets/foto/slider', $galleries);

            File::delete(storage_path('app/public/assets/foto/slider', $konten->galleries));
        } else {
            $filename_galleries = $konten->galleries_file;
        }

        // UPLOAD GALLERIES
        $galleries_foto_array = [];
        // for( $i = 0; $i < count($request->slider_foro); $i++ ) }{


        for( $i = 0; $i < 11; $i++ ) {
            if( isset($request->caption_galleries_foto[$i]) && !isset($request->galleries_foto[$i]) ) {
                $galleries_foto_array[] = unserialize($konten->galleries)[$i];
            } else if( isset($request->caption_galleries_foto[$i]) && isset($request->galleries_foto[$i]) ) {
                $galleries_foto = $request->file('galleries_foto')[$i];
                $filename_galleries_foto = upload_file('app/public/assets/foto/galleries', $galleries_foto);
                $galleries_foto_array[] = $filename_galleries_foto;
            } else if( !isset($request->caption_galleries_foto[$i]) && !isset($request->galleries_foto[$i]) ) {
                unset($galleries_foto_array[$i]);
            }
        }
        $galleries_foto_array = serialize($galleries_foto_array);


        $konten->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'meta' => $request->meta,
            'keywords' => $request->keywords,
            'thumbnail' => $filename_thumbnail,
            'penulis' => ($request->contributor != null && $request->id_kontributor != null) ? 'kontributor umum/pamong budaya' : 'admin',
            'galleries_file' => $request->slider_utama != null ? $filename_galleries : null,
            'galleries' => $galleries_foto_array,
            'caption_galleries' => serialize($request->caption_galleries_foto),
            'slider_utama' => $request->slider_utama != null ? 1 : 0,
            'is_wbtb' => $request->is_wbtb != null ? $request->is_wbtb : 1,
            'status' => $request->publish != null ? 'publikasi' : 'draft',
            'published_at' => $request->publish_date . " " . $request->publish_time
        ]);

        $konten->kategori_opk()->sync($request->kategori_opk);

        Alert::success('Berhasil', 'Konten Labu berhasil diedit');

        return redirect()->route('admin.konten_labu.index');
    }


    public function delete($id)
    {
        $konten = KontenLabu::findOrFail($id);

        if( $konten->galleries != null )
            File::delete(storage_path('app/public/assets/foto/galleries', $konten->galleries));

        foreach( unserialize($konten->galleries) as $sf_lama ) {
            File::delete(storage_path('app/public/assets/foto/galleries', $sf_lama));
        }
        File::delete(storage_path('app/public/assets/foto/thumbnail', $konten->thumbnail));
        $konten->kategori_opk()->detach();
        $konten->delete();

        return redirect()->route('admin.konten_labu.index');
    }
}
