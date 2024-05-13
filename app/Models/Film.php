<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function DetailFilm(){
        return $this->hasOne(DetailFilm::class);
    }

    public function MediaFilm(){
        // Pk 
        return $this->hasMany(MediaFilm::class);
    }
}
