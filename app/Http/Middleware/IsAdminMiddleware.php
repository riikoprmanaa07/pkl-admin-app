<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Jangan lupa impor Auth

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Periksa apakah pengguna sudah login DAN apakah perannya adalah 'admin'.
        if (Auth::check() && Auth::user()->role == 'admin') {
            // 2. Jika ya, lanjutkan permintaan ke tujuan berikutnya (Controller).
            return $next($request);
        }

        // 3. Jika tidak, tolak akses dan arahkan kembali ke halaman utama.
        return redirect('/login');
    }
}