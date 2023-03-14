<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('roles_users')->insert([
                [
                    'role_id' => random_int(1, 10),
                    'user_id' => random_int(1, 10),
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
