<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'テスト太郎',
                'email' => 'test@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'テスト次郎',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123')
            ]
        ]);
    }
}
