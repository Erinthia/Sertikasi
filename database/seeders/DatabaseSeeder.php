<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //  User::create([
        //     'nama' => 'Member', // Ganti 'name' dengan 'nama'
        //     'email' => 'member@example.com',
        //     'password' => bcrypt('12345678'),
        //     'role' => 'member',
        //     'status' => 'active',
        // ]);

        User::create([
            'nama' => 'Admin', // Ganti 'name' dengan 'nama'
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status' => 'active',
        ]);
    }
}
