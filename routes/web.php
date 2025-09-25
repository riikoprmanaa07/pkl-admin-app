<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WidyaiswaraController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\JamMengajarController; // Menggunakan controller baru kita

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =========================================================================
// RUTE PUBLIK (Dapat diakses siapa saja)
// =========================================================================
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil.widyaiswara', [WidyaiswaraController::class, 'index'])->name('profil.widyaiswara');
Route::get('/info-ajar', [PageController::class, 'infoajar'])->name('info.ajar');
Route::get('/statistik', [PageController::class, 'statistik'])->name('statistik');


// =========================================================================
// RUTE UNTUK PENGGUNA YANG SUDAH LOGIN (Auth)
// =========================================================================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// =========================================================================
// RUTE KHUSUS ADMIN
// =========================================================================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

    // Rute terpusat untuk pengelolaan Jam Mengajar
    Route::get('/jam-mengajar/create', [JamMengajarController::class, 'create'])->name('jam-mengajar.create');
    Route::post('/jam-mengajar', [JamMengajarController::class, 'store'])->name('jam-mengajar.store');
    
    // Anda bisa menambahkan rute admin lainnya di sini di masa depan
});


// =========================================================================
// RUTE AUTENTIKASI (Login, Register, dll dari Laravel Breeze)
// =========================================================================
require __DIR__.'/auth.php';

