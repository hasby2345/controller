@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Penulis
                    <a href="{{route('penulis.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('penulis.update',$penulis->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-2">
                        <label for="">Nama Penulis</label>
                        <input type="text" class="form-control @error('nama_penulis') is invalid @enderror"
                            name="nama_penulis" value="{{$penulis->nama_penulis}}">
                            @error('nama_penulis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Bio Penulis</label>
                        <input type="text" class="form-control @error('bio') is invalid @enderror"
                            name="bio" value="{{$penulis->bio}}">
                            @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-sm btn-success" type="submit">
                            Simpan
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
