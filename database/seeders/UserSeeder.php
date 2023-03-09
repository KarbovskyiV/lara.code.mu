<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'city_id' => random_int(1, 10),
                'email' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(5000, 50000),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'city_id' => random_int(1, 10),
                'email' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(5000, 50000),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'city_id' => random_int(1, 10),
                'email' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(5000, 50000),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'city_id' => random_int(1, 20),
                'email' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(5000, 50000),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'city_id' => random_int(1, 10),
                'email' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(5000, 50000),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'city_id' => random_int(1, 10),
                'email' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(5000, 50000),
                'created_at' => now(),
            ],
        ]);
    }
}
