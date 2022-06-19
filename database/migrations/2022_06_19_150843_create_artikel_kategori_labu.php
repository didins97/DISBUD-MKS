<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelKategoriLabu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_kategori_labu', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_artikel_labu');
            $table->unsignedInteger('id_kategori_labu');
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
        Schema::dropIfExists('artikel_kategori_labu');
    }
}
