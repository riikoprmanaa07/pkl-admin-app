<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WidyaiswaraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Rute Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// 2. Rute Dashboard User Biasa (dari Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 3. Grup Rute KHUSUS ADMIN
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
});

// 4. Rute Profil (dari Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 5. Rute Widyaiswara
    Route::get('/direktori-widyaiswara', [WidyaiswaraController::class, 'index'])->name('widyaiswara.index');
});

// 6. Rute Autentikasi (dari Breeze)
require __DIR__.'/auth.php';