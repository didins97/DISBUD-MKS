<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'nama' => 'dinas kebudayaan makassar',
            'email' => 'superadmin@dikemas.com',
            'email_verified_at' => now(),
            'telp' => '12323232',
            'role' => 'admin',
            'password' => bcrypt('dikemas@disbud'), // password
            'remember_token' => Str::random(10),
            'domisili' => 1
            ],
            [
                'nama' => 'dinas kebudayaan makassar',
                'email' => 'adminparasanganta@dikemas.com',
                'email_verified_at' => now(),
                'telp' => '12323232',
                'role' => 'admin',
                'password' => bcrypt('cagarbudaya@123'), // password
                'remember_token' => Str::random(10),
                'domisili' => 1
            ],
            [
                'nama' => 'dinas kebudayaan makassar',
                'email' => 'adminlabu@dikemas.com',
                'email_verified_at' => now(),
                'telp' => '12323232',
                'role' => 'admin',
                'password' => bcrypt('kebudayaan@123'), // password
                'remember_token' => Str::random(10),
                'domisili' => 1
                ],

        ];
        DB::table('users')->insert($data);

    }
}
