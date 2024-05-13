<?php

namespace App\Http\Controllers;

use App\Models\Album_Musik;
use App\Http\Requests\StoreAlbum_MusikRequest;
use App\Http\Requests\UpdateAlbum_MusikRequest;

class AlbumMusikController extends Controller
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
     * @param  \App\Http\Requests\StoreAlbum_MusikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbum_MusikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album_Musik  $album_Musik
     * @return \Illuminate\Http\Response
     */
    public function show(Album_Musik $album_Musik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album_Musik  $album_Musik
     * @return \Illuminate\Http\Response
     */
    public function edit(Album_Musik $album_Musik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlbum_MusikRequest  $request
     * @param  \App\Models\Album_Musik  $album_Musik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbum_MusikRequest $request, Album_Musik $album_Musik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album_Musik  $album_Musik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album_Musik $album_Musik)
    {
        //
    }
}
