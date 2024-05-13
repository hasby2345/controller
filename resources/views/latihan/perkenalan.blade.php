@extends('layout.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    perkenalan
                </div>
                <div class="card-body">
                    <p>Nama : {{$data['nama']}}</p>
                    <p>Agama : {{$data['agama']}}</p>
                    <p>Alamat : {{$data['alamat']}}</p>
                    <p>Hobi</p>
                    <ol>
                        @foreach ($data['hobi'] as $item)
                        <li>{{$item}}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
