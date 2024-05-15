<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;


class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::orderBy('id', 'desc')->get();
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenulisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penulis'=>'required|max:225',
            'bio'=>'required'
        ]);

        $penulis = new Penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('succes', 'data berhasil ditambahlan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $penulis = Penulis::FindOrFail($penulis->id);
        $penulis = Penulis::FindOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $penulis = Penulis::FindOrFail($penulis->id);
        $penulis = Penulis::FindOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenulisRequest  $request
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdatePenulisRequest $request, Penulis $penulis)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_penulis'=>'required|max:225',
            'bio'=>'required'
        ]);

        // $penulis = Penulis::FindOrFail($penulis->id);
        $penulis = Penulis::FindOrFail($id);
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('succes', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Penulis $penulis)
    public function destroy($id)
    {
        $penulis = Penulis::FindOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil dihapus');
    }
}
