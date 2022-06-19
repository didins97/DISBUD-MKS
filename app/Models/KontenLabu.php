<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class KontenLabu extends Model
{
    use HasFactory;
    use HasSlug;

    protected $table = 'konten_labu';

    protected $guarded = [];
    protected $casts = [
        'galleries' => 'array',
        'caption_galleries' => 'array',

    ];

    public function kategori_opk()
    {
        return $this->belongsToMany('App\Models\KategoriOpk', 'konten_labu_kategori_opk', 'id_konten_labu', 'id_kategori_opk');
    }

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
