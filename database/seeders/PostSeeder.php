<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => Str::random(15),
                'slug' => Str::slug(Str::random('10')),
                'text' => Str::random(),
                'likes' => random_int(0, 1000),
                'created_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'slug' => Str::slug(Str::random('10')),
                'text' => Str::random(),
                'likes' => random_int(0, 1000),
                'created_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'slug' => Str::slug(Str::random('10')),
                'text' => Str::random(),
                'likes' => random_int(0, 1000),
                'created_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'slug' => Str::slug(Str::random('10')),
                'text' => Str::random(),
                'likes' => random_int(0, 1000),
                'created_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'slug' => Str::slug(Str::random('10')),
                'text' => Str::random(),
                'likes' => random_int(0, 1000),
                'created_at' => now(),
            ],
            [
                'title' => Str::random(15),
                'slug' => Str::slug(Str::random('10')),
                'text' => Str::random(),
                'likes' => random_int(0, 1000),
                'created_at' => now(),
            ],
        ]);
    }
}
