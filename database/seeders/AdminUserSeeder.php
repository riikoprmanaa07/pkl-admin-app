<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // <-- Pastikan baris ini ada
use Illuminate\Support\Facades\Hash; // <-- Pastikan baris ini juga ada

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Di sini kita memanggil User::create() DAN memberikan
        // array yang berisi semua data yang diperlukan.
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('Bayuganteng11'), // Ganti 'password123' dengan password pilihan Anda
        ]);
    }
}