<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_judul')->unique();
            $table->text('deskripsi');
            $table->integer('jml_halaman');
            $table->string('cover');
            $table->date('tgl_terbit');
            $table->foreignId('id_penulis')->onDelete('cascade');
            $table->timestamps();
        });

        //membuat table pivot (table bantu)
        Schema::create('genre_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->onDelete('cascade');
            $table->foreignId('id_genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
        Schema::dropIfExists('genre_buku');
    }
};
