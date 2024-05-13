<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert(
            [
                'nama' => 'Muhammad Hasby R',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cibay'
            ]
            );
        Siswa::insert(
            [
                'nama' => 'Wirasya',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.kopo'
            ]
            );
            Siswa::insert(
                [
                    'nama' => 'Daffa',
                    'kelas' => 'XI RPL 2',
                    'jenis_kelamin' => 0,
                    'alamat' => 'Jl.Sekeawi'
                ]
                );
                Siswa::insert(
                    [
                        'nama' => 'Gilang',
                        'kelas' => 'XI RPL 2',
                        'jenis_kelamin' => 0,
                        'alamat' => 'Jl.kopo'
                    ]
                    );
                    Siswa::insert(
                        [
                            'nama' => 'Paujan',
                            'kelas' => 'XI RPL 2',
                            'jenis_kelamin' => 0,
                            'alamat' => 'Jl.Rancamanyar'
                        ]
                        );
    }
}
