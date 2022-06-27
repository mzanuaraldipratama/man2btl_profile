<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // get image
    public function getGetImageAttribute()
    {
        return ($this->image) ? asset('storage/' . $this->image) : asset('img/avatar.jpeg');
    }
}
