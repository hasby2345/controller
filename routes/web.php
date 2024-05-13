<?php

use Illuminate\Support\Facades\Route;
use App\Models\Siswa;
use App\Models\Sekolah;
use App\Models\Film;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    $nama = "Hasby";
    $kelas = "XI RPL 2";
    return view('data');
});

Route::get('siswa', function () {
    return view('siswa');
    // return Siswa::all();
});

Route::get('sekolah', function () {
    return Sekolah::all();
});

Route::get('album', function () {
    return view('Album');
});

Route::get('film', function () {
    return view('Film');
});

Route::get('film/{id}', function (int $id) {
    return view('detail-film', ['film' => Film::findorFail($id)]);
});

// route with controller
Route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan',[App\Http\Controllers\MyController::class,'animals']);

//route movie
Route::get('movie', [MovieController::class, 'getMovie']);
Route::get('movie/{id}', [MovieController::class, 'getMovieById']);
