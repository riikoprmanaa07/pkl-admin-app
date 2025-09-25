<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    /**
     * Menampilkan halaman login.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('auth.login', [
            'geminiApiKey' => config('services.gemini.key')
        ]);
    }

    /**
     * Menangani permintaan autentikasi yang masuk.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi input nip dan password
        $request->validate([
            'nip' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // 2. Coba autentikasi menggunakan nip dan password
        if (Auth::attempt($request->only('nip', 'password'), $request->boolean('remember'))) {
            // Jika autentikasi berhasil
            $request->session()->regenerate();

            // 3. Pengalihan (redirect) berdasarkan role
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/jam-mengajar/create'); // halaman admin
            } else {
                return redirect()->intended('/dashboard'); // halaman user biasa
            }
        }

        // 4. Jika login gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'nip' => 'NIP atau password salah.',
        ])->withInput();
    }
    
    /**
     * Hancurkan sesi yang terautentikasi (logout).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout pengguna dari guard 'web'.
        Auth::guard('web')->logout();

        // Batalkan sesi saat ini untuk menghapus semua data sesi.
        $request->session()->invalidate();

        // Buat ulang token CSRF untuk sesi yang baru.
        $request->session()->regenerateToken();

        // Arahkan pengguna kembali ke halaman utama setelah logout.
        return redirect('/');
    }
}
