<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('cities')->insert([
                [
                    'country_id' => random_int(1, 10),
                    'name' => fake()->city(),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
