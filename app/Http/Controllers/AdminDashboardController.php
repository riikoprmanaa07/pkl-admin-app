<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin.
     */
    public function dashboard()
    {
        // Perintah ini hanya untuk menampilkan file view di:
        // resources/views/admin/dashboard.blade.php
        return view('admin.dashboard');
    }

}