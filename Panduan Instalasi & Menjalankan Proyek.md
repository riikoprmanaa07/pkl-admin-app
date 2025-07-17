Panduan Instalasi & Menjalankan Proyek

Aplikasi ini dibangun menggunakan Laravel 12 dengan fitur-fitur sebagai berikut:

    - Halaman utama publik (PAK Wi Online, Info Ajar, Profil Widyaiswara, dan Statistik).
    - Sistem otentikasi (Login & Register).
    - Pembagian peran pengguna (admin dan user).
    - Dashboard privat untuk setiap peran setelah login.

1.  Prasyarat Sistem ⚙️
    Sebelum memulai, pastikan perangkat Anda telah terinstal perangkat lunak berikut:

    -   PHP (versi 8.2 atau lebih baru)
    -   Composer (Manajer paket untuk PHP)
    -   Node.js & NPM (Manajer paket untuk JavaScript)
    -   Git (Sistem kontrol versi)
    -   Server Database (misalnya MySQL atau MariaDB)

2.  Langkah-langkah Instalasi 🚀
    Silakan ikuti perintah-perintah di bawah ini secara berurutan di dalam terminal atau command prompt Anda.

Langkah A: Clone Repositori
Salin (clone) semua file proyek dari repositori GitHub ke komputer Anda.

    # Gannti [URL_GITHUB_ANDA] dengan URL repositori GitHub proyek Anda
      git clone [URL_GITHUB_ANDA]
    # Masuk ke dalam folder proyek yang baru saja dibuat
      cd [NAMA_FOLDER_PROYEK]

Langkah B: Instal Dependensi (PHP & JavaScript)

1. Instal dependensi PHP dengan Composer:
   Perintah ini akan mengunduh semua library yang dibutuhkan oleh Laravel.

    composer install

2. Instal dependensi JavaScript dengan NPM:
   Perintah ini akan mengunduh semua library frontend seperti Tailwind CSS.

    npm install

Langkah C: Konfigurasi Lingkungan (.env)

1. Buat file .env:
   Salin file contoh .env.example menjadi file .env. File ini akan menyimpan semua konfigurasi rahasia Anda.

    cp .env.example .env

2. Buat Kunci Aplikasi (Application Key):
   Perintah ini wajib dijalankan untuk mengenkripsi semua data sensitif di aplikasi.

    php artisan key:generate

3. Konfigurasi Database:

    - Buat sebuah database baru di server database Anda (misalnya melalui phpMyAdmin) dengan nama pak_wi_online (atau nama lain yang Anda inginkan).

    - Buka file .env yang baru saja Anda buat dengan teks editor.

    - Cari dan sesuaikan baris berikut dengan informasi database Anda:

DB_CONNECTION=mysq

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=pak_wi_online # <-- Sesuaikan nama database Anda

DB_USERNAME=root # <-- Sesuaikan username database Anda

DB_PASSWORD= # <-- Isi password database Anda (kosongkan jika tidak ada)

Langkah D: Siapkan Database
Perintah ini akan membuat semua tabel yang dibutuhkan di dalam database (migrate) dan mengisinya dengan data awal (seed), seperti akun admin dan user default.

php artisan migrate --seed

3. Menjalankan Aplikasi ✅
   Untuk menjalankan aplikasi, Anda perlu menjalankan dua perintah secara bersamaan di dua terminal yang berbeda.

1. Terminal Pertama - Kompilasi Aset Frontend:

Jalankan perintah ini dan biarkan tetap berjalan. Perintah ini akan memantau perubahan pada file CSS dan JavaScript Anda.

npm run dev

2. Terminal Kedua - Jalankan Server Laravel:

Buka terminal baru, lalu jalankan perintah ini untuk menyalakan server pengembangan Laravel.

php artisan serve

Setelah kedua perintah di atas berjalan, aplikasi Anda sekarang sudah dapat diakses melalui browser di alamat:

http://127.0.0.1:8000

4.  Akun untuk Pengujian 🔑
    Proyek ini sudah dilengkapi dengan data awal (seeder) untuk akun admin dan user. Anda bisa langsung mencoba login menggunakan kredensial berikut:

    -   ail: user@example.com
    -   Akun Admin:
    -   Email: admin@example.com
    -   Password: Bayuganteng11

Selamat, proyek Anda sekarang sudah siap untuk dijalankan dan diuji oleh siapa saja!
