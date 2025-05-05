<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'test1@test.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'test2@test.com',
            'password' => bcrypt('password'),
        ]);
    }
}
