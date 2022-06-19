<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriOpk extends Model
{
    use HasFactory;

    protected $table = 'kategori_opk';

    public function konten()
    {
        return $this->belongsToMany('App\Models\KontenLabu', 'konten_labu_kategori_opk', 'id_kategori_opk', 'id_konten_labu');
    }

}
