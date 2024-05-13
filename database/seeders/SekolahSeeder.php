<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        Sekolah::insert(
            [
                'nama' => 'SMK Assalaam Bandung',
                'alamat' => 'Jl.Cibaduyut',
                'email' => 'smkassalaam@gmail.com',
                'telepon' => '89612345',
                'status' => '1'
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'SMK Marhas',
                'alamat' => 'Jl.Kopo',
                'email' => 'smkmarhas@gmail.com',
                'telepon' => '89612346',
                'status' => '1'
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 1 Bandung',
                'alamat' => 'Jl. Wastukancana No. 3, Bandung',
                'email' => 'smkn1_bdg@yahoo.com',
                'telepon' => '4204514',
                'status' => '1'
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'SMA Angkasa 2',
                'alamat' => 'Jl.Sulaeman',
                'email' => 'smaangkasa@gmail.com',
                'telepon' => '89612345',
                'status' => '1'
            ]
            );
            Sekolah::insert(
                [
                    'nama' => 'SMK Negeri 2 Kota Bandung',
                    'alamat' => 'Jl. DR.Wahidin No.2 ke Jalan Ciliwung no.4 Bandung',
                    'email' => 'humas@smkn2bandung.sch.id',
                    'telepon' => '22-7234285',
                    'status' => '1'
                ]
                );
                Sekolah::insert(
                    [
                        'nama' => 'SMK Negeri 3 Kota Bandung',
                        'alamat' => 'Jl. Solontongan No. 10 Bandung',
                        'email' => 'smk3bandung@yahoo.com',
                        'telepon' => '0227305529',
                        'status' => '1'
                    ]
                    );
                    Sekolah::insert(
                        [
                            'nama' => 'SMA Margaasih',
                            'alamat' => 'Jl. Margaasih',
                            'email' => 'smamargaasih@yahoo.com',
                            'telepon' => '0227305530',
                            'status' => '1'
                        ]
                        );
                        Sekolah::insert(
                            [
                                'nama' => 'SMA Assalaam Bandung',
                                'alamat' => 'Jl. Situ Tarate, Cibaduyut, Dayeuhkolot, Kabupaten Bandung',
                                'email' => 'smaassalaambdg@gmail.com',
                                'telepon' => '0227305530',
                                'status' => '1'
                            ]
                            );
                            Sekolah::insert(
                                [
                                    'nama' => 'SMAN 1 Margahayu',
                                    'alamat' => 'JL KH.WAHID HASYIM NO.387 BANDUNG, Sulaeman, Kec. Margahayu',
                                    'email' => 'sman_1_margahayu@yahoo.co.id.',
                                    'telepon' => '0227305531',
                                    'status' => '1'
                                ]
                                );
                                Sekolah::insert(
                                    [
                                        'nama' => 'SMAN 3 Bandung',
                                        'alamat' => 'Jl. Belitung No.8, Merdeka, Kec. Sumur Bandung, Kota Bandung',
                                        'email' => '@sman3bandung.sch.id.',
                                        'telepon' => '0227305532',
                                        'status' => '1'
                                    ]
                                    );


            
    }
}
