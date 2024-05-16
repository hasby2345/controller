@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Edit Buku
                    <a href="{{route('buku.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control @error('nama_judul') is-invalid @enderror"
                                        name="nama_judul" value="{{ old('nama_judul', $buku->nama_judul)}}">
                                    @error('nama_judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Isbn</label>
                                    <input type="text" class="form-control @error('isbn') is-invalid @enderror"
                                        name="isbn" value="{{ old('isbn', $buku->isbn)}}">
                                    @error('isbn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Jumlah Halaman</label>
                                    <input type="number" class="form-control @error('jml_halaman') is-invalid @enderror"
                                        name="jml_halaman" value="{{ old('jml_halaman', $buku->jml_halaman)}}">
                                    @error('jml_halaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Tanggal Terbit</label>
                                    <input type="text" class="form-control @error('tgl_terbit') is-invalid @enderror"
                                        name="tgl_terbit" value="{{ old('tgl_terbit', $buku->tgl_terbit)}}">
                                    @error('tgl_terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="">Cover</label>
                            @if($buku->cover)
                            <p><img src="{{ asset('image/buku/' . $buku->cover) }}" alt="Cover" width="100px"></p>
                            @endif
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                            @error('cover')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Penulis</label>
                            <select name="id_penulis" class="form-control @error('id_penulis') is-invalid @enderror">
                                <option value="">Pilih Penulis</option>
                                @foreach ($penulis as $data)
                                <option value="{{$data->id }}" {{ $data->id == $buku->id_penulis ? 'selected' : ''
                                    }}>{{$data->nama_penulis}}</option>
                                @endforeach
                            </select>
                            @error('tgl_terbit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Genre</label>
                            <select name="genre[]" class="form-select" multiple>
                                @foreach ($genre as $data)
                                <option value="{{$data->id}}" {{ in_array($data->id, $selectGenre) ? 'selected' : ''
                                    }}>{{$data->nama_genre}}
                                </option>
                                @endforeach
                            </select>
                            @error('tgl_terbit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi Buku</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
                            @error('deskripsi')
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
