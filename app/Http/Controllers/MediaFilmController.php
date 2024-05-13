<?php

namespace App\Http\Controllers;

use App\Models\MediaFilm;
use App\Http\Requests\StoreMediaFilmRequest;
use App\Http\Requests\UpdateMediaFilmRequest;

class MediaFilmController extends Controller
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
     * @param  \App\Http\Requests\StoreMediaFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaFilm  $mediaFilm
     * @return \Illuminate\Http\Response
     */
    public function show(MediaFilm $mediaFilm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaFilm  $mediaFilm
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaFilm $mediaFilm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaFilmRequest  $request
     * @param  \App\Models\MediaFilm  $mediaFilm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaFilmRequest $request, MediaFilm $mediaFilm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaFilm  $mediaFilm
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaFilm $mediaFilm)
    {
        //
    }
}
