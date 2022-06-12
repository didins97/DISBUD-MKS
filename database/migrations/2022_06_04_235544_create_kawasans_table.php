<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKawasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kawasans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('konten');
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->text('meta')->nullable();
            $table->string('keywords')->nullable();
            $table->string('kategori')->nullable();
            $table->text('letak')->nullable();
            $table->string('slug');
            $table->string('thumbnail');
            $table->unsignedInteger('id_lokasi')->nullable();
            $table->timestamp('published_at')->useCurrent();
            $table->enum('penulis', ['admin', 'umum']);
            $table->json('galleries');
            $table->json('caption_galleries');
            $table->string('galleries_file')->nullable();
            $table->boolean('slider_utama')->default(false);
            $table->enum('status', ['publikasi', 'draft']);
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
        Schema::dropIfExists('kawasans');
    }
}
