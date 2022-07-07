<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSkPenetapanToContentParasanganta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bendas', function (Blueprint $table) {
            $table->string('sk_penetapan')->nullable();
        });
        Schema::table('bangunans', function (Blueprint $table) {
            $table->string('sk_penetapan')->nullable();
        });
        Schema::table('kawasans', function (Blueprint $table) {
            $table->string('sk_penetapan')->nullable();
        });
        Schema::table('kegiatan1s', function (Blueprint $table) {
            $table->string('sk_penetapan')->nullable();
        });
        Schema::table('strukturs', function (Blueprint $table) {
            $table->string('sk_penetapan')->nullable();
        });
        Schema::table('situses', function (Blueprint $table) {
            $table->string('sk_penetapan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bendas', function (Blueprint $table) {
            $table->dropColumn('sk_penetapan');
        });
        Schema::table('situses', function (Blueprint $table) {
            $table->dropColumn('sk_penetapan');
        });
        Schema::table('strukturs', function (Blueprint $table) {
            $table->dropColumn('sk_penetapan');
        });
        Schema::table('kegiatan1s', function (Blueprint $table) {
            $table->dropColumn('sk_penetapan');
        });
        Schema::table('kawasans', function (Blueprint $table) {
            $table->dropColumn('sk_penetapan');
        });
        Schema::table('bangunans', function (Blueprint $table) {
            $table->dropColumn('sk_penetapan');
        });
    }
}
