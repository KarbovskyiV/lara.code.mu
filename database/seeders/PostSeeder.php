<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                [
                    'title' => fake()->title(),
                    'slug' => fake()->slug(),
                    'text' => fake()->text(),
                    'likes' => random_int(0, 1000),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
