<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert([
            'judul' => 'Daepo Haean Jusangjeolli Cliff',
            'foto' => 'https://images.squarespace-cdn.com/content/v1/61ccc660df90dc119f48ae87/e635249b-bb3a-436f-806d-ff63877610f9/Daepo-03.jpg?format=1500w',
            'kategori' => 'Wisata',
            'konten' => 'Terletak di tepi pantai selatan Pulau Jeju di distrik Daepo Seogwipo adalah Tebing Daepo Jusangjeolli, salah satu monumen alam paling terkenal di Jeju. Tebing Jusangjeolli pertama kali terbentuk sekitar 140.000-250.000 tahun yang lalu ketika lava basal tebal dari Gunung Hallasan meletus ke laut Jungmun. Saat lava cair mendingin dengan cepat, ia berkontraksi dan terbelah, membentuk kolom hitam berbentuk heksagonal yang menjadi ikon seperti yang terlihat saat ini. Selain formasi batuannya yang unik, tebing ini terkenal dengan ombaknya yang menakjubkan yang menghantam pilar-pilarnya secara dramatis saat air pasang—bahkan terkadang mencapai ketinggian lebih dari 20m! Karena fenomena alam tersebut, Tebing Jusangjeolli ditetapkan oleh pemerintah Korea sebagai Monumen Nasional resmi no. 443 pada tahun 2005 dan sejak itu menjadi daya tarik yang wajib dilihat oleh banyak pengunjung Pulau Jeju.',
            'penulis' => 'Mata Emiya'
        ]);

        Artikel::insert([
            'judul' => 'Seopjikoji',
            'foto' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/39000/39260-Seopjikoji.jpg',
            'kategori' => 'Jalan jalan',
            'konten' => 'Seopjikoji adalah salah satu tempat paling termasyhur di Pulau Jeju berkat beraneka pemandangan pesisirnya, pedesaan yang tenang, dan dapat dikunjungi sepanjang tahun.

            Terjemahan harfiah Seopjikoji adalah ‘tanjung sempit’. Area sempit serta tebing terjal dan formasi bebatuan gunung api spektakuler inilah yang memberikan keelokan pada lokasi yang berada di ujung timur pulau ini. Pelancong dari segala usia dan dengan kemampuan apa pun dapat menikmati jalan kaki santai di jalan setapak beraspal berkondisi baik ini.

            Ikuti rambu-rambu dari parkir mobil dan tuju tebing di sepanjang jalan setapak berbatu. Di bawah pada sisi kanan Anda, pantai Sinyang Seopjikoji yang elok dihantam ombak laut, sedangkan di seberang pagar kayu di sebelah kiri Anda terdapat padang rumput hijau yang luas, tempat kuda merumput. Lebih jauh lagi, Anda akan melihat Puncak Seongsan Ilchulbong yang perkasa di kejauhan.

            Keindahan area ini tidak luput dari perhatian sutradara film Korea. Seopjikoji telah sering menjadi lokasi pembuatan film Korea termasuk Ginko Bed 2 dan A Thousand Day Nights. Film seri televisi Korea yang populer, All In, dibuat di sini pula.',
            'penulis' => 'Mata Emiya'
        ]);

        Artikel::insert([
            'judul' => 'Kuliner di Bandung',
            'foto' => 'https://awsimages.detik.net.id/community/media/visual/2022/05/21/5-kuliner-bandung-yang-dapat-peringkat-wajib-coba-dari-netizen-1.jpeg?w=1200',
            'kategori' => 'Kuliner',
            'konten' => 'Bandung sudah dikenal para wisatawan dengan kelezatannya. Kamu mungkin sudah mengenali berbagai macam makanan khas Bandung seperti, Seblak, Cilok, Batagor, hingga Surabi.

            Meskipun makanan-makanan ini sudah banyak dijual di daerah-daerah lain di seluruh nusantara, namun mencoba makanan khas Bandung langsung dari tempat asalnya tentu akan lebih memuaskan',
            'penulis' => 'Liputan 6'
        ]);

        Artikel::insert([
            'judul' => 'Teknologi Ramah Lingkungan',
            'foto' => 'https://pasla.jambiprov.go.id/wp-content/uploads/2023/03/teknologi-ramah-lingkungan.png',
            'kategori' => 'Teknologi',
            'konten' => 'Lingkungan sekitar kita tidak lepas dari pemanfaatan teknologi, mulai di bidang pertanian, industri besar, dan industri skala rumah tangga. Pemanfaatan teknologi yang tidak tepat dapat menyebabkan kerusakan pada lingkungan. Oleh karena itu, sebagai warga negara yang baik, kita harus memperhatikan lingkungan di sekitar kita. Selain untuk menjaga kelestarian alam, menjaga lingkungan bermanfaat untuk menjaga kesehatan diri sendiri dan keluarga. Teknologi ramah lingkungan (sustainable technology/green technology) merupakan bentuk penerapan teknologi yang memperhatikan prinsip-prinsip pelestarian lingkungan. Teknologi tersebut bertujuan untuk memberi kemudahan dan pemenuhan kebutuhan manusia. Teknologi ramah lingkungan bertujuan untuk menghasilkan berbagai produk dan jasa untuk kepentingan manusia dengan memanfaatkan sumber daya alam yang dapat diperbarui dan tidak menghasilkan limbah yang membahayakan lingkungan. Selain itu, teknologi ramah lingkungan juga dapat menggunakan bahan yang dapat didaur ulang.',
            'penulis' => 'Adrian Fadli'
        ]);
    }
}
