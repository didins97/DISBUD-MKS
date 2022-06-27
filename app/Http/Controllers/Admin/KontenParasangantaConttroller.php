<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriParasanganta;
use Illuminate\Support\Facades\File; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;


use App\Models\KontenParasanganta;
use Illuminate\Http\Request;
use Alert;


class KontenParasangantaConttroller extends Controller
{
    public function index(Request $request){

        $kategori = $request->kategori;

        $KontenParasanganta = KontenParasanganta::whereHas('kategori_parasanganta', function($query) use ($kategori) {
            $query->where('isi', $kategori);
        })->orderBy('published_at', 'desc')->get();
        // dd($);
        // dd($KontenParasanganta);

        return view('admin.content.konten_parasanganta.index', compact('KontenParasanganta','kategori'));

    }

    public function add(Request $request) 
    {
        
        $kategori = $request->kategori;
        $kategori_show = KategoriParasanganta::where('id', '!=', 7)->where('isi','!=', $kategori)->get();
        return view('admin.content.konten_parasanganta.add',compact('kategori_show','kategori'));
    }

    public function store(Request $request)
    {
        $kategori = $request->kategori;
        $currentKategori = KategoriParasanganta::where('isi', $kategori)->pluck('id');

        $this->validate($request, [
            'nama' => 'required',
            'konten' => 'required',
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
        
      

        $konten= KontenParasanganta::create([
            'nama' => $request->nama,
            'konten' => $request->konten,
            'meta' => $request->meta,
            'keywords' => $request->keywords,
            'thumbnail' => $filename_thumbnail,
            'penulis' => ($request->contributor != null && $request->id_kontributor != null) ? 'kontributor umum/pamong budaya' : 'admin',
            'longitude'=> $request->longitude,
            'latitude'=> $request->latitude,
            'kelurahan'=> $request->kelurahan,
            'kecamatan'=> $request->kecamatan,
            'letak' => $request->letak,
            'nama_lain'=>$request->nama_lain,
            'tahun'=>$request->tahun,
            'galleries_file' => $request->slider_utama != null ? $filename_galleries : null,
            'galleries' => $galleries_foto_array,
            'caption_galleries' => serialize($request->caption_galleries_foto),
            'slider_utama' => $request->slider_utama != null ? 1 : 0,
            'status' => $request->publish != null ? 'publikasi' : 'draft',
            'published_at'=> Carbon::now()
        ]);
        $konten->kategori_parasanganta()->attach($currentKategori);
        $konten->kategori_parasanganta()->attach($request->kategori_show);

        

        Alert::success('Berhasil', 'Foto berhasil ditambahkan');

        return redirect()->route('admin.konten_parasanganta.index','kategori='.$kategori);
        // return Redirect::back();

    }

    public function edit($parasangantaId)
    {
        $foto = KontenParasanganta::findOrFail($parasangantaId);
        $kategori_show = KategoriParasanganta::where('id', '!=', 7)->get();

        return view('admin.content.konten_parasanganta.edit', compact('foto','kategori_show'));
    }

    public function update(Request $request, $photoId)
    {
        $this->validate($request, [
            'nama' => 'required',
            'konten' => 'required',
        ]);
        $foto = KontenParasanganta::findOrFail($photoId);

        if( $request->has('thumbnail') ) {
            $this->validate($request, [
                'thumbnail' => 'required|max:10000|mimes:png,jpg,jpeg',
            ]);
            // UPLOAD THUMBNAIL
            $thumbnail = $request->file('thumbnail');
            $filename_thumbnail = upload_file('app/public/assets/foto/thumbnail', $thumbnail);

            File::delete(storage_path('app/public/assets/foto/thumbnail', $foto->thumbnail));
        } else {
            $filename_thumbnail = $foto->thumbnail;
        }
    

        // UPLOAD FILE SLIDER UTAMA(NULLABLE)
        if( $request->has('slider') ) {
            $galleries = $request->file('slider');
            $filename_galleries = upload_file('app/public/assets/foto/slider', $galleries);

            File::delete(storage_path('app/public/assets/foto/slider', $foto->galleries));            
        } else {
            $filename_galleries = $foto->galleries_file;
        }

        // UPLOAD GALLERIES
        $galleries_foto_array = [];
        


        for( $i = 0; $i < 11; $i++ ) {
            if( isset($request->caption_galleries_foto[$i]) && !isset($request->galleries_foto[$i]) ) {
                $galleries_foto_array[] = unserialize($foto->galleries)[$i];
            } else if( isset($request->caption_galleries_foto[$i]) && isset($request->galleries_foto[$i]) ) {
                $galleries_foto = $request->file('galleries_foto')[$i];
                $filename_galleries_foto = upload_file('app/public/assets/foto/galleries', $galleries_foto);
                $galleries_foto_array[] = $filename_galleries_foto;
            } else if( !isset($request->caption_galleries_foto[$i]) && !isset($request->galleries_foto[$i]) ) {
                unset($galleries_foto_array[$i]);
            }
        }
        $galleries_foto_array = serialize($galleries_foto_array);
        

        
        $foto->update([
            'nama' => $request->nama,
            'konten' => $request->konten,
            'meta' => $request->meta,
            'keywords' => $request->keywords,
            'thumbnail' => $filename_thumbnail,
            'penulis' => ($request->contributor != null && $request->id_kontributor != null) ? 'kontributor umum/pamong budaya' : 'admin',
            'longitude'=> $request->longitude,
            'latitude'=> $request->latitude,
            'kelurahan'=> $request->kelurahan,
            'kecamatan'=> $request->kecamatan,
            'letak' => $request->letak,
            'nama_lain'=>$request->nama_lain,
            'tahun'=>$request->tahun,
            'galleries_file' => $request->slider_utama != null ? $filename_galleries : null,
            'galleries' => $galleries_foto_array,
            'caption_galleries' => serialize($request->caption_galleries_foto),
            'slider_utama' => $request->slider_utama != null ? 1 : 0,
            'status' => $request->publish != null ? 'publikasi' : 'draft',
            'published_at'=> Carbon::now()

        ]);

        $foto->kategori_parasanganta()->sync($request->kategori_show);
        

        Alert::success('Berhasil', 'Foto berhasil diedit');

        // return redirect()->route('admin.konten_parasanganta.index');
        return Redirect::back();

    }


    public function delete($photoId)
    {
        $parasanganta = KontenParasanganta::findOrFail($photoId);

        if( $parasanganta->galleries != null )
            File::delete(storage_path('app/public/assets/foto/galleries', $parasanganta->galleries));   
        
        foreach( unserialize($parasanganta->galleries) as $sf_lama ) {
            File::delete(storage_path('app/public/assets/foto/galleries', $sf_lama));
        }
        File::delete(storage_path('app/public/assets/foto/thumbnail', $parasanganta->thumbnail));
        $parasanganta->delete();

        return redirect()->route('admin.konten_parasanganta.index');
    }
}
