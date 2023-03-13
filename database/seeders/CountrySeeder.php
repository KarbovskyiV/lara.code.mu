<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('countries')->insert([
                [
                    'name' => fake()->country(),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
