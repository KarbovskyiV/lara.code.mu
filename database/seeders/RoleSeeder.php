<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('roles')->insert([
                [
                    'name' => fake()->word(),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
