@extends('layout.layout')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $film->judul }}</h1>
                <p class="lead text-muted">{{ $film->deskripsi }}</p>
                <p>
                    <a href="{{ $film->DetailFilm->url_imdb }}" class="btn btn-primary my-2">Ke Halaman IMDB</a>
                    <a href="{{ url('/film') }}" class="btn btn-secondary my-2">Kembali Ke Halaman Home</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($film->MediaFilm as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            {{-- <p>Media Title : {{ $item->media_title }}</p> --}}
                            @if ($item->media_type)
                            <iframe width="100%" height="315" src="{{ $item->url_media }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                {{-- Url Media : <a href="{{ $item->url_media }}">Klik Disinii</a> --}}
                            @else
                                <img src="{{ $item->url_media }}" alt="" height="315px" width="100%">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
