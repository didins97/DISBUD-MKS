<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'nama' => $this->faker->name(),
        //     'email' => 'redaksijalurrempah@gmail.com',
        //     'email_verified_at' => now(),
        //     'telp' => '12323232',
        //     'role' => 'admin',
        //     'password' => bcrypt('bukabuka@123'), // password
        //     'remember_token' => Str::random(10),
        //     'domisili' => 1
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
