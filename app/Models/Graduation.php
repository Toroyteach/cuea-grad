<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Graduation extends Model implements HasMedia
{
    use HasFactory;
    //use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'graduation_date',
        'title',
        'description',
        'image_url',
    ];
    
    public function resources()
    {
        return $this->hasMany(Resource::class);
    }
}
