<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelLabu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_labu', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->longText('isi');
            $table->text('meta')->nullable();
            $table->string('keywords')->nullable();
            $table->string('slug');
            $table->string('thumbnail');
            $table->enum('penulis', ['admin', 'umum']);
            $table->json('galleries');
            $table->json('caption_galleries');
            $table->string('galleries_file')->nullable();
            $table->boolean('slider_utama')->default(false);
            $table->enum('status', ['publikasi', 'draft']);
            $table->timestamp('published_at')->useCurrent();
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
        Schema::dropIfExists('artikel_labu');
    }
}
