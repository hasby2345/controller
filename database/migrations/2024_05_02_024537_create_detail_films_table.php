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
        Schema::create('detail_films', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('film_id')->unique();
            $table->foreignId('film_id')->unique()->constrained()->onDelete('cascade');
            $table->string('code_film')->unique();
            $table->string('url_imdb')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_films');
    }
};
