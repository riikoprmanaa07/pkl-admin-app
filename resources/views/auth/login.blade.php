<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
    {{-- CSS untuk styling --}}
    <style>
        body { font-family: 'Inter', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f3f4f6; margin: 0; }
        .card { padding: 2.5rem; background: white; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05); width: 380px; }
        .card h2 { text-align: center; font-size: 1.75rem; font-weight: 700; color: #1f2937; margin-top: 0; margin-bottom: 0.5rem; }
        .card .subtitle { text-align: center; color: #6b7280; margin-bottom: 2rem; }
        .form-group { margin-bottom: 1.5rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151; }
        .password-wrapper { position: relative; }
        .form-control { width: 100%; padding: 0.75rem; padding-right: 3rem; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; font-size: 1rem; transition: border-color 0.2s; }
        .form-control:focus { border-color: #3b82f6; outline: none; box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2); }
        .toggle-password { position: absolute; top: 50%; right: 0.75rem; transform: translateY(-50%); background: none; border: none; cursor: pointer; padding: 0.25rem; color: #6b7280; }
        .btn { width: 100%; padding: 0.85rem; border: none; background-color: #3b82f6; color: white; border-radius: 8px; cursor: pointer; font-size: 1rem; font-weight: 600; transition: background-color 0.2s; }
        .btn:hover { background-color: #2563eb; }
        .link { text-align: center; margin-top: 1.5rem; font-size: 0.875rem; color: #6b7280; }
        .link a { color: #3b82f6; text-decoration: none; font-weight: 600; }
        .link a:hover { text-decoration: underline; }
        .alert { background-color: #fef2f2; border: 1px solid #fecaca; color: #b91c1c; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; text-align: center; }
        
        /* Gaya untuk Fitur Gemini */
        .gemini-feature { text-align: center; margin-top: 2rem; border-top: 1px solid #e5e7eb; padding-top: 1.5rem; }
        .gemini-btn { display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.5rem 1rem; border: 1px solid #d1d5db; background-color: #f9fafb; color: #374151; border-radius: 8px; cursor: pointer; font-size: 0.875rem; font-weight: 500; transition: all 0.2s; }
        .gemini-btn:hover { background-color: #f3f4f6; border-color: #3b82f6; }
        .tip-box { margin-top: 1rem; padding: 1rem; background-color: #eff6ff; border-left: 4px solid #3b82f6; color: #1e40af; font-size: 0.875rem; text-align: left; border-radius: 4px; display: none; } /* Tersembunyi secara default */
        .loading-spinner { border: 2px solid #f3f3f3; border-top: 2px solid #3b82f6; border-radius: 50%; width: 14px; height: 14px; animation: spin 1s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <h2>Selamat Datang</h2>
        <p class="subtitle">Masuk untuk melanjutkan ke dasbor Anda.</p>

        {{-- Ini adalah bagian penting untuk menampilkan pesan kesalahan dari controller --}}
        @if ($errors->any())
            <div class="alert">
                {{ $errors->first('nip') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="nip">NIP</label>
                <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <button type="button" class="toggle-password" id="togglePassword">
                        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>

        <script>
            // --- Logika untuk Lihat/Sembunyikan Password (Tetap ada) ---
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                const isPassword = password.type === 'password';
                password.type = isPassword ? 'text' : 'password';
                this.innerHTML = isPassword 
                    ? `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path><line x1="2" x2="22" y1="2" y2="22"></line></svg>` 
                    : `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>`;
            });
        </script>
    </body>
</html>
