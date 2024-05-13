<?php

namespace Database\Seeders;

use \App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Mr Beast',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjSbObQOjhstuem6KMU9jWeGiW0DAxtgTy5w&s',
        ]);

        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'MR Beast Antartika',
            'url_media' => 'https://assets-prd.ignimgs.com/2024/03/18/mr-beast-002-1710771767038.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'MR Beast Liburan',
            'url_media' => 'https://upload.wikimedia.org/wikipedia/commons/c/ce/MrBeast_2023_%28cropped%29.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'MR Beast Kapal Pesiar',
            'url_media' => 'https://www.youtube.com/embed/48h57PspBec?si=bV9ZIvXPwkJDvGeZ" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'MR Beast Tiket Pesawat',
            'url_media' => 'https://www.youtube.com/embed/1WEAJ-DFkHE?si=lCVRLDHLIt2OtRRk" title="YouTube video player',
        ]);

        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Neymar',
            'url_media' => 'https://images.ctfassets.net/3mv54pzvptwz/5eTv6hTyA1pqkFClYRn0qt/be626a573cbf1ee7e421b73f87ed6851/20221205_foto_GETTY_neymar_jr_jogo_brasil_x_coreia_copa_do_mundo__209_.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Neymar',
            'url_media' => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Neymar_Jr._with_Al_Hilal%2C_3_October_2023_-_03_%28cropped%29.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Tanboy Kun',
            'url_media' => 'https://www.youtube.com/embed/Poi6vtuZXFY?si=NXgnRxDq5OSHnCIO" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Tanboy Kun',
            'url_media' => 'https://www.youtube.com/watch?v=OPYBo_wfd6I&pp=ygUKdGFuYm95IGt1bg%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Tanboy Kun',
            'url_media' => 'https://www.youtube.com/watch?v=XMIUiINFIT0&pp=ygUKdGFuYm95IGt1bg%3D%3D',
        ]);

        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Cristiano',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgQq0u0HyQUTByoZM9y1dYOo3PMbxVXehKOg&s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Windah Forza',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD6Lk_JoogK3YDtZvPkkRS73QPpJ592XAUyMCEDRYVTg&s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Windah Horor',
            'url_media' => 'https://www.youtube.com/watch?v=xF9YRE7sYSc&t=13s&pp=ygUPd2luZGFoIGJhc3VkYXJh',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Windah Basudara',
            'url_media' => 'https://www.youtube.com/watch?v=aT81bEd3vO8&t=12s&pp=ygUPd2luZGFoIGJhc3VkYXJh',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Windah Basudara',
            'url_media' => 'https://www.youtube.com/watch?v=Fh-bJTV22dg&pp=ygUPd2luZGFoIGJhc3VkYXJh',
        ]);
    }
}
