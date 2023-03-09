<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'name' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'created_at' => now(),
            ],
        ]);
    }
}
