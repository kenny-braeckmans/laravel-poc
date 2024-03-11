<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('administrators')->insert([
            'email' => 'admin@example.com',
            'name' => 'Admin User',
            'password' => Hash::make('password'),
            'isSiteAdmin' => true,
        ]);

        DB::table('administrators')->insert([
            'email' => 'anotheradmin@example.com',
            'name' => 'Another Admin',
            'password' => Hash::make('anotherpassword'),
            'isSiteAdmin' => false,
        ]);
    }
}
