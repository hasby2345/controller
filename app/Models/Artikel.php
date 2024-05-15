<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'foto', 'kategori', 'konten', 'penulis'];


    public $visible = ['judul', 'foto', 'kategori', 'konten', 'penulis'];
}
