<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('profiles')->insert([
                [
                    'user_id' => random_int(1, 10),
                    'name' => fake()->firstName(),
                    'surname' => fake()->lastName(),
                    'email' => fake()->safeEmail(),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
