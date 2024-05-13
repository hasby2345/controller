<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul' => 'Shogun',
            'deskripsi' => 'When a mysterious European ship is found marooned in a nearby fishing village, Lord Yoshii Toranaga discovers secrets that could tip the scales of power and devastate his enemies.'
        ]);
        Film::insert([
            'judul' => 'Jumanji',
            'deskripsi' => 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.'
        ]);
        Film::insert([
            'judul' => 'Fallout',
            'deskripsi' => 'In a future, post-apocalyptic Los Angeles brought about by nuclear decimation, citizens must live in underground bunkers to protect themselves from radiation, mutants and bandits.'
        ]);
    }
}
