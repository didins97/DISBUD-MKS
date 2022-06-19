<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenLabuKategoriOpk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konten_labu_kategori_opk', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_konten_labu');
            $table->unsignedInteger('id_kategori_opk');
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
        Schema::dropIfExists('konten_labu_kategori_opk');
    }
}
