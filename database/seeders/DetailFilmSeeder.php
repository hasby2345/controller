<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt12637874',
            'url_imdb' => 'https://www.imdb.com/title/tt12637874/?ref_=hm_top_tt_i_1'
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt2788316',
            'url_imdb' => 'https://www.imdb.com/title/tt2788316/?ref_=tt_sims_tt_i_2'
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt3581920',
            'url_imdb' => 'https://www.imdb.com/title/tt3581920/?ref_=tt_sims_tt_i_3'
        ]);
    }
}
