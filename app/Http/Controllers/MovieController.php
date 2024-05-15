<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//impor movie
use App\Models\Movie;

class MovieController extends Controller
{
    //melihat semua data
    public function getMovie()
    {
        //melihat semua data yang ada di dalam model "Movie"
        $movies = Movie::all();
        //dump data atau melihat isi data dari sebuah variable
        // dd($movie);
        //passing data movie ke view "movie.index"
        return view('movie.index', compact('movies'));
    }

    public function getMovieById($id){
        //menampilkan data berdasarkan
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
