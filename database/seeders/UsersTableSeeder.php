<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 10 user dummy menggunakan factory
        User::factory()->count(10)->create();

        // Menambahkan user admin secara spesifik
        User::create([
            'nama' => 'Admin', // Ganti 'name' dengan 'nama'
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'status' => 'active',
        ]);
        
    }
}
