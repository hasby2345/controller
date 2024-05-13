@php
    // $siswa = \App\Models\Siswa::where('kelas', '=', 'XI RPL 2')
    //         // =, !=, <, <=, >, >=, <> 
    //         // ->orderBy('id', 'desc')
    //         // ->take(100)
    //         // ->where('nama','Gilang')
    //         ->where('jenis_kelamin', '1')
    //         groupBy('id')
    //         ->get();
            $siswa = \App\Models\Siswa::find(6);
            $siswa2 = \App\Models\Siswa::where('id',1)->orderBy('id', 'desc') ->get();
            $siswa3 = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->first();
            $siswa4   = \App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->first();
@endphp

<h1>ID : {{ $siswa3->id ?? 'Kosong' }}</h1>
    <h1>Nama : {{ $siswa3->nama ?? 'Kosong' }}</h1>
    <h1>Kelas : {{ $siswa3->kelas ?? 'Kosong' }}</h1>
    <h1>Jenis Kelamin : {{ $siswa3->jenis_kelamin ?? 'Kosong' }}</h1>
    <hr>


<h2>Tanpa Foreach</h2>
    <h1>ID : {{ $siswa->id ?? 'Kosong' }}</h1>
    <h1>Nama : {{ $siswa->nama ?? 'Kosong' }}</h1>
    <h1>Kelas : {{ $siswa->kelas ?? 'Kosong' }}</h1>
    <h1>Jenis Kelamin : {{ $siswa->jenis_kelamin ?? 'Kosong' }}</h1>
    <hr>

@foreach ($siswa2 as $data)
    <h1>Nama : {{ $data->nama }}</h1>
    <h1>Kelas : {{ $data->kelas }}</h1>
    <h1>Jenis Kelamin : {{ $data->jenis_kelamin }}</h1>
@endforeach

{{-- @foreach (App\Models\Sekolah::all() as $data)
    <h1>Nama : {{ $data->nama }}</h1>
    <h1>Alamat : {{ $data->alamat }}</h1>
    <h1>Email : {{ $data->email }}</h1>
    <h1>Telepon : {{ $data->telepon }}</h1>
    <h1>Status : {{ $data->email }}</h1>
    <hr>
@endforeach --}}