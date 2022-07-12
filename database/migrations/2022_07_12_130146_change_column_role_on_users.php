<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnRoleOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropColumns('users', ['role']);
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('contributor');
            $table->enum('role', ['superAdmin', 'adminParasanganta', 'adminLabu'])->nullable();
        });
        User::where('email', 'superadmin@dikemas.com')->update(['role' => 'superAdmin']);
        User::where('email', 'adminparasanganta@dikemas.com')->update(['role' => 'adminParasanganta']);
        User::where('email', 'adminlabu@dikemas.com')->update(['role' => 'adminLabu']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('users', ['role']);
        Schema::dropColumns('users', ['contributor']);
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'super admin'])->nullable();
            $table->enum('contributor', ['Kontributor Pamong Budaya', 'Kontributor Umum'])->nullable();
        });
        User::where('email', 'superadmin@dikemas.com')->update(['role' => 'super admin']);
        User::where('email', 'adminparasanganta@dikemas.com')->update(['role' => 'admin']);
        User::where('email', 'adminlabu@dikemas.com')->update(['role' => 'admin']);
    }
}
