<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function buku()
    {
        $buku = Buku::latest()->get();
        $genre = Genre::all();
        $penulis = Penulis::all();
        return view('welcome', compact('buku', 'genre', 'penulis'));
    }

    public function detailBuku($id)
    {
        $buku = Buku::FindOrFail($id);
        return view('detail_buku', compact('buku'));
    }
}
