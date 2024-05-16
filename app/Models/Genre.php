<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_genre',];
    public $visible = ['nama_genre',];
    public $timestamp = true;

    //relasi Many to Many genre & buku
    public function buku(){
        //model genre memiliki banyak data dari model buku
        //melalui table 'pivot' genre_buku yang dimiliki
        //oleh id_genre dan id_buku
        return $this->belongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }
}
