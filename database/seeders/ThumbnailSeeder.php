<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThumbnailSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('thumbnails')->insert([
                [
                    'post_id' => random_int(1, 10),
                    'path' => fake()->imageUrl(),
                    'alt' => fake()->word(),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
