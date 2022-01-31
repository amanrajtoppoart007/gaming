<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Puzzle extends Model implements HasMedia
{
    use InteractsWithMedia,HasFactory;

      protected $fillable = [
        'level',
    ];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
    public function solution()
    {
        return $this->hasOne(Solution::class);
    }

     public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50)->keepOriginalImageFormat();
        $this->addMediaConversion('preview')->keepOriginalImageFormat();
    }
}
