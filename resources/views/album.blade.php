@php
    $album = \App\Models\Album_Musik::all();
    $album2 = \App\Models\Album_Musik::where('tahun', '2007')->orderBy('id', 'desc')->get();
    $album3 = \App\Models\Album_Musik::find(10);
    $album4 = \App\Models\Album_Musik::first();
@endphp

<h1 style="color: blue">Menampilkan All</h1>
@foreach ($album as $data)
    <h1>Judul : {{ $data->judul }}</h1>
    <h1>Tahun : {{ $data->tahun }}</h1>
    <h1>Cover Album : {{ $data->cover_album }}</h1>
    <hr>
@endforeach

@foreach ($album2 as $data)
<h2 style="color: aqua">Menampilkan Where OrderBy</h2>
    <h1>ID : {{ $data->id ?? 'Kosong' }}</h1>
    <h1>Judul : {{ $data->judul ?? 'Kosong' }}</h1>
    <h1>Tahun : {{ $data->tahun ?? 'Kosong' }}</h1>
    <h1>Cover Album : {{ $data->cover_album ?? 'Kosong' }}</h1>
    <hr>
    @endforeach

<h2 style="color: brown">Menampilkan Find</h2>
    <h1>ID : {{ $album3->id ?? 'Kosong' }}</h1>
    <h1>Judul : {{ $album3->judul ?? 'Kosong' }}</h1>
    <h1>Tahun : {{ $album3->tahun ?? 'Kosong' }}</h1>
    <h1>Cover Album : {{ $album3->cover_album ?? 'Kosong' }}</h1>
    <hr>

<h2 style="color: chartreuse">Menampilkan First</h2>
    <h1>ID : {{ $album4->id ?? 'Kosong' }}</h1>
    <h1>Judul : {{ $album4->judul ?? 'Kosong' }}</h1>
    <h1>Tahun : {{ $album4->tahun ?? 'Kosong' }}</h1>
    <h1>Cover Album : {{ $album4->cover_album ?? 'Kosong' }}</h1>
    <hr>