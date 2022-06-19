<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenLabu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konten_labu', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->longText('isi');
            $table->text('meta')->nullable();
            $table->string('keywords')->nullable();
            $table->string('slug');
            $table->string('thumbnail');
            $table->timestamp('published_at')->useCurrent();
            $table->enum('penulis', ['admin', 'umum']);
            $table->json('galleries');
            $table->json('caption_galleries');
            $table->string('galleries_file')->nullable();
            $table->boolean('slider_utama')->default(false);
            $table->boolean('is_wbtb')->default(false);
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
        Schema::dropIfExists('wbtb');
    }
}
