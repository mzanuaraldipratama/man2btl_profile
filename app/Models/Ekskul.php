<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;
    protected $table = 'ekskul';
    protected $guarded = ['id'];
    protected $withCount = ['images'];

    public function getGetImageAttribute()
    {
        return asset('storage/' . $this->logo);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
