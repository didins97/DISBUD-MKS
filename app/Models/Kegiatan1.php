<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Kegiatan1 extends Model
{
    use HasFactory;
    use HasSlug;

    protected $guarded = [];
    
    protected $casts = [
        'galleries' => 'array',
        'caption_galleries' => 'array',
        
    ];
    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama')
            ->saveSlugsTo('slug');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
