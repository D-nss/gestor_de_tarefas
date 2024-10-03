<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'username' => 'user1',
            'password' => password_hash('1234', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
