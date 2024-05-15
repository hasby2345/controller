<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    //melihat semua data
    public function getArtikel()
    {
        //melihat semua data yang ada di dalam model "Movie"
        $artikels = Artikel::all();
        //dump data atau melihat isi data dari sebuah variable
        // dd($movie);
        //passing data movie ke view "movie.index"
        return view('artikel.artikel', compact('artikels'));
    }

    public function getArtikelById($id){
        //menampilkan data berdasarkan
        $artikel = Artikel::findOrFail($id);
        return view('artikel.lihat', compact('artikel'));
    }

    public function getArtikelByKategori($kategori){
        //menampilkan data berdasarkan
        $artikels = Artikel::where('kategori', $kategori)->get();
        return view('artikel.Kategoriartikel', compact('artikels'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
