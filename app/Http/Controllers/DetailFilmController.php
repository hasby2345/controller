<?php

namespace App\Http\Controllers;

use App\Models\DetailFilm;
use App\Http\Requests\StoreDetailFilmRequest;
use App\Http\Requests\UpdateDetailFilmRequest;

class DetailFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetailFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailFilm  $detailFilm
     * @return \Illuminate\Http\Response
     */
    public function show(DetailFilm $detailFilm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailFilm  $detailFilm
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailFilm $detailFilm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailFilmRequest  $request
     * @param  \App\Models\DetailFilm  $detailFilm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailFilmRequest $request, DetailFilm $detailFilm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailFilm  $detailFilm
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailFilm $detailFilm)
    {
        //
    }
}
