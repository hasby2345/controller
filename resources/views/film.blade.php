{{-- @php
    $film = \App\Models\Film::all();
    // $singleFilm = \App\Models\Film::find(3);
    // $detailFilm = \App\Models\DetailFilm::all();
    // $mediaFilm = \App\Models\MediaFilm::all();
@endphp

<h2>Daftar Film</h2>
@foreach ($film as $data)
    <h2>Id : {{ $data->id }}</h2>
    <h2>Judul Film : {{ $data->judul }}</h2>
    <a href="{{ url('film/' .$data->id) }}">klikkk</a>
    {{-- <h2>Deskripsi : {{ $orangTua->deskripsi }}</h2>
    <h3>Detail Film</h3>
        <h4>Code Film : {{ $orangTua->DetailFilm->code_film }}</h4>
        <h4>Url Imdb Film : {{ $orangTua->DetailFilm->url_imdb }}</h4>
    <h1>Media Film</h1>
     {{-- <h3>Media Type : {{ $orangTua->MediaFilm->media_type }}</h3>
    <h3>Media Title : {{ $orangTua->MediaFilm->media_title }}</h3>
    <h3>Url Media  : {{ $orangTua->MediaFilm->url_media }}</h3>
    <hr>
    <h2>Media Film</h2>
    @foreach($orangTua->MediaFilm as $item)
    <h3>Media Title : {{ $item->media_title }}</h3>
    <h3>Url Media : {{ $item->url_media }}</h3>
    @endforeach
    <hr>
@endforeach

{{-- <h2>Single Film</h2>
<p>
    <h2>Id : {{ $singleFilm->id }}</h2>
    <h2>Judul Film : {{ $singleFilm->judul }}</h2>
    <h2>Deskripsi : {{ $singleFilm->deskripsi }}</h2>
    <h3>Detail Film</h3>
        <h4>Code Film : {{ $singleFilm->DetailFilm->code_film }}</h4>
        <h4>Url Imdb Film : {{ $singleFilm->DetailFilm->url_imdb }}</h4>
    <hr>
</p>

<p style="color: blue ">Daftar Detail Film</p>
@foreach ($detailFilm as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Code Film : {{ $item->code_film }}</h2>
    <h2>Deskripsi : {{ $item->url_imdb }}</h2>
    <h3>Detail Film</h3>
        <h4>Judul Film : {{ $item->Film->judul }}</h4>
        <h4>Deskripsi Film : {{ $item->Film->deskripsi }}</h4>
    <hr>
@endforeach --}}

{{-- @foreach ($mediaFilm as $item)
    <h2>Id : {{ $item->id }}</h2>
    <h2>Judul Film : {{ $item->judul }}</h2>
    <h2>Deskripsi : {{ $item->deskripsi }}</h2>
    <h3>Detail Film</h3>
        <h4>Code Film : {{ $item->DetailFilm->code_film }}</h4>
        <h4>Url Imdb Film : {{ $item->DetailFilm->url_imdb }}</h4>
    {{-- <h1>Media Film</h1>
    <h3>Media Type : {{ $item->MediaFilm->media_type }}</h3>
    <h3>Media Title : {{ $item->MediaFilm->media_title }}</h3>
    <h3>Url Media  : {{ $item->MediaFilm->url_media }}</h3>
    <hr> --}}
    @extends('layout.layout')
    @section('content')
    @php
        $film = \App\Models\Film::all();
    @endphp
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($film as $item)
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">{{ $item->judul }}</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ url('film/' .$item->id) }}"  class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
