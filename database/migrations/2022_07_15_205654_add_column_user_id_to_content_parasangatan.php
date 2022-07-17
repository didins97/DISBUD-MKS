<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUserIdToContentParasangatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bendas', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
        });
        Schema::table('bangunans', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
        });
        Schema::table('kawasans', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
        });
        Schema::table('kegiatan1s', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
        });
        Schema::table('strukturs', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
        });
        Schema::table('situses', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
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
            $table->dropColumn('user_id');
        });
        Schema::table('situses', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('strukturs', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('kegiatan1s', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('kawasans', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('bangunans', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
