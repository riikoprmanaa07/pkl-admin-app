<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mencari user dengan email admin, jika sudah ada, tidak akan dibuat lagi.
        User::firstOrCreate(
            ['email' => 'admin@example.com'], // Kunci untuk mencari
            [
                'name' => 'Admin',
                // PERBAIKAN: Menambahkan NIP untuk user admin agar sesuai aturan database.
                'nip' => '000000000000000000', 
                'role' => 'admin',
                'password' => Hash::make('password'), // Ganti 'password' dengan password yang aman
            ]
        );
    }
}

