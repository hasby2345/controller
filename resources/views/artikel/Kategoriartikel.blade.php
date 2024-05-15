{{-- @extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h2>{{$artikel->judul}}</h2></p>
                    <p>Kategori : {{$artikel->kategori}}</p>
                    <p>Konten : {{$artikel->konten}}</p>
                    <p>Penulis : {{$artikel->penulis}}</p>
                    {{-- <p><a href="{{$artikel->penulis}}">Link</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection --}}

@extends('layout.layout')
@section('content')

<div class="container">
    <div class="row">
        {{-- <h1 class="py-5">Wisata di Korea Selatan</h1> --}}
        @foreach ($artikels as $artikel)
        <div class="col py-5">
            <div class="card" style="width: 35rem;">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="..." width="200px" height="400px">
                <div class="card-body">
                    <p class="card-text">
                    <h3>{{$artikel->judul}}</h3>
                    </p>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url('artikel/' .$artikel->id) }}"
                                class="btn btn-sm btn-outline-secondary">Baca Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
