<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriShow;

class KategoriShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'isi' => 'Benda'
            ],
            [
                'isi' => 'Bangunan'
            ],
            [
                'isi' => 'Struktur'
            ],
            [
                'isi' => 'Situs'
            ],
            [
                'isi' => 'Kawasan'
            ],
            [
                'isi' => 'Kegiatan'
            ],
            [
                'isi' => 'Events'
            ],
        ];
        DB::table('kategori_shows')->insert($data);
    }
}
