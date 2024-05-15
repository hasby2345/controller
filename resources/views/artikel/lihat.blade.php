@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><h2>{{$artikel->judul}}</h2></p>
                    {{-- <p>Kategori : {{$artikel->kategori}}</p> --}}
                        <p>Kategori : <a href="{{url('artikel/kategori/'. $artikel->kategori) }}">{{$artikel->kategori}}</a></p>
                    <p>Konten : {{$artikel->konten}}</p>
                    <p>Penulis : {{$artikel->penulis}}</p>
                    {{-- <p><a href="{{$artikel->penulis}}">Link</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    <a type="button" class="btn bg-secondary" href="{{ url('artikel/') }}">Kembali</a>
</div>
</div>
@endsection
