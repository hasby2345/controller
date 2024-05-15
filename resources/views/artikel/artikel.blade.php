@extends('layout.layout')
@section('content')

<div class="container">
    <div class="row">
        {{-- <h1 class="py-5">Wisata di Korea Selatan</h1> --}}
        @foreach ($artikels as $item)
        <div class="col py-5">
            <div class="card" style="width: 35rem;">
                <img src="{{$item->foto}}" class="card-img-top" alt="..." width="200px" height="400px">
                <div class="card-body">
                    <p class="card-text">
                    <h3>{{$item->judul}}</h3>
                    </p>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url('artikel/' .$item->id) }}"
                                class="btn btn-sm btn-outline-secondary">Baca Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <p>
            <a type="button" class="btn btn-secondary" href="{{url('artikel/kategori/Wisata') }}">Wisata</a>
            <a type="button" class="btn btn-secondary" href="{{url('artikel/kategori/Jalan jalan') }}">Jalan jalan</a>
            <a type="button" class="btn btn-secondary" href="{{url('artikel/kategori/Kuliner') }}">Kuliner</a>
            <a type="button" class="btn btn-secondary" href="{{url('artikel/kategori/Teknologi') }}">Teknologi</a>
        </p>
    </div>
</div>
</div>
@endsection
