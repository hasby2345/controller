@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                <div class="alert alert-success fade show" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header"> Data Penulis
                        <a href="{{route('penulis.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th class="col-md-2">Nama Penulis</th>
                                        <th class="col-md-3">Aksi</th>
                                    </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                    @foreach ($penulis as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama_penulis}}</td>
                                    {{-- <td>
                                        <a href="{{route('penulis.edit',$item->id)}}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{route('penulis.show',$item->id)}}" class="btn btn-sm btn-warning">Show</a>
                                        <a class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-data').submit();">Delete</a>
                                    </td> --}}
                                    <td>
                                     <form action="{{route('penulis.destroy',$item->id)}}" method="POST" class="py-2">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('penulis.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('penulis.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
                                        <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
