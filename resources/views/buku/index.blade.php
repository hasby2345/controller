@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                <div class="alert alert-success fade show" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header"> Data Buku
                        <a href="{{route('buku.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Nama Buku</th>
                                    <th class="col-md-2">Penulis</th>
                                    <th class="col-md-2">Cover</th>
                                    <th class="col-md-3">Aksi</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($buku as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama_judul}}</td>
                                    <td>{{$item->penulis->nama_penulis}}</td>
                                    <td align="center"><img src="{{asset('/images/buku/' . $item->cover)}}" style="width: 100px;" alt=""></td>
                                    <td>
                                     <form action="{{route('buku.destroy',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('buku.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('buku.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
                                        <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
