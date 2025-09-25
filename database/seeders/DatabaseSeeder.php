<?php

namespace Database\Seeders;

// Pastikan Anda juga sudah menambahkan baris ini jika belum ada
use Database\Seeders\AdminUserSeeder; 

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Baris ini memanggil Seeder spesifik yang telah kita buat untuk admin.
        // Ini adalah satu-satunya baris yang Anda perlukan di dalam method run().
               $this->call([
            AdminUserSeeder::class,
            WidyaiswaraSeeder::class, // Pastikan Anda memiliki seeder ini
            KompetensiSeeder::class,  // Pastikan Anda memiliki seeder ini
            CalendarSeeder::class,    // Ini yang berisi nama-nama diklat
        ]);

        // Catatan: Kode User::factory() bawaan Laravel bisa Anda hapus
        // jika Anda tidak membutuhkannya, agar file ini bersih dan fokus
        // untuk memanggil seeder yang kita buat saja.
    }
}