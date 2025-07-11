<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Alert;
use App\Models\Bangunan;
use App\Models\Kawasan;
use App\Models\Kegiatan1;
use App\Models\Situs;
use App\Models\Struktur;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BendaControllerAdmin extends Controller
{
    public function index(){
        $bangunan = Benda::orderBy('created_at', 'desc')->get();
        return view('admin.content.benda.index', compact('bangunan'));
    }

    public function add() 
    {
        return view('admin.content.benda.add');
    }

    public function store(Request $request)
    {
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
        
      

        $data = [
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
            'sk_penetapan'=>$request->sk_penetapan,
            'user_id' => auth()->user()->id,

            // 'id_kontributor' => ($request->contributor != null && $request->id_kontributor != null) ? $request->id_kontributor : null,
            'galleries_file' => $request->slider_utama != null ? $filename_galleries : null,
            'galleries' => $galleries_foto_array,
            'caption_galleries' => serialize($request->caption_galleries_foto),
            'slider_utama' => $request->slider_utama != null ? 1 : 0,
            'status' => $request->publish != null ? 'publikasi' : 'draft',
            // 'published_at' => $request->publish_date . " " . $request->publish_time
            'published_at'=> Carbon::now()

        ];

        Benda::create($data);
        
        if( !empty($request->kategori) ) {
            if( in_array('bangunan', $request->kategori) ) Bangunan::create($data);
            if( in_array('struktur', $request->kategori) ) Struktur::create($data);
            if( in_array('kawasan', $request->kategori) ) Kawasan::create($data);
            if( in_array('situs', $request->kategori) ) Situs::create($data);
            if( in_array('kegiatan', $request->kategori) ) Kegiatan1::create($data);
        }
        

        Alert::success('Berhasil', 'Foto berhasil ditambahkan');

        return redirect()->route('admin.benda.index');
    }

    public function edit($bangunanId)
    {
        $foto = Benda::findOrFail($bangunanId);
        


        return view('admin.content.benda.edit', compact('foto'));
    }

    public function update(Request $request, $photoId)
    {
        $this->validate($request, [
            'nama' => 'required',
            'konten' => 'required',
        ]);
        $foto = Benda::findOrFail($photoId);

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
        // for( $i = 0; $i < count($request->slider_foro); $i++ ) }{


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
        

        // $slug_english = null;
        // if( !$foto->slug_english ) {
        //     $slug_english = generate_slug($request->judul_english, '-');
        // }
        
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
            'sk_penetapan'=>$request->sk_penetapan,

            // 'id_kontributor' => ($request->contributor != null && $request->id_kontributor != null) ? $request->id_kontributor : null,
            'galleries_file' => $request->slider_utama != null ? $filename_galleries : null,
            'galleries' => $galleries_foto_array,
            'caption_galleries' => serialize($request->caption_galleries_foto),
            'slider_utama' => $request->slider_utama != null ? 1 : 0,
            'status' => $request->publish != null ? 'publikasi' : 'draft',
            // 'published_at' => $request->publish_date . " " . $request->publish_time
            'published_at'=> Carbon::now()

        ]);

        

        Alert::success('Berhasil', 'Foto berhasil diedit');

        return redirect()->route('admin.benda.index');
    }

    public function delete($photoId)
    {
        $bangunan = Benda::findOrFail($photoId);

        if( $bangunan->galleries != null )
            File::delete(storage_path('app/public/assets/foto/galleries', $bangunan->galleries));   
        
        foreach( unserialize($bangunan->galleries) as $sf_lama ) {
            File::delete(storage_path('app/public/assets/foto/galleries', $sf_lama));
        }
        File::delete(storage_path('app/public/assets/foto/thumbnail', $bangunan->thumbnail));
        $bangunan->delete();

        return redirect()->route('admin.benda.index');
    }

    public function showQrCode($id)
    {
        $bangunan = Benda::findOrFail($id);
        $qrCode = QrCode::size(300)->generate( route('benda_detail', $bangunan->slug) );
        return [
            'qrCode' => base64_encode($qrCode),
            'slug' => $bangunan->slug
        ];
    }
}
