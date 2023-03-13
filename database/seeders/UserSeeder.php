<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                [
                    'city_id' => random_int(1, 10),
                    'login' => fake()->userName(),
                    'password' => fake()->password(),
                    'name' => fake()->name(),
                    'email' => fake()->safeEmail(),
                    'age' => random_int(12, 95),
                    'salary' => random_int(1000, 50000),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
