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
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // 1. Lakukan autentikasi pada kredensial pengguna.
        // Metode ini akan otomatis melempar ValidationException jika gagal.
        $request->authenticate();

        // 2. Buat ulang ID sesi untuk mencegah serangan session fixation.
        $request->session()->regenerate();

        // 3. **Logika Pengalihan Kustom (Custom Redirect Logic)**
        // Periksa apakah pengguna yang baru saja login memiliki peran 'admin'.
        if ($request->user()->role === 'admin') {
            // Jika pengguna adalah admin, arahkan ke dashboard admin.
            return redirect()->route('admin.dashboard');
        }

        // 4. Untuk semua pengguna lain, arahkan mereka ke tujuan yang diinginkan sebelumnya,
        // atau ke rute HOME default jika tidak ada.
        return redirect()->intended(RouteServiceProvider::HOME);
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
