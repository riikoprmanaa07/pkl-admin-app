<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun Baru</title>
    {{-- CSS untuk styling (sama dengan halaman login untuk konsistensi) --}}
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
        .gemini-btn { display: flex; align-items: center; justify-content: center; gap: 0.5rem; width: 100%; padding: 0.5rem; margin-top: 0.5rem; border: 1px dashed #d1d5db; background-color: #f9fafb; color: #374151; border-radius: 8px; cursor: pointer; font-size: 0.875rem; }
        .gemini-btn:hover { background-color: #f3f4f6; border-color: #3b82f6; }
        .link { text-align: center; margin-top: 1.5rem; font-size: 0.875rem; color: #6b7280; }
        .link a { color: #3b82f6; text-decoration: none; font-weight: 600; }
        .link a:hover { text-decoration: underline; }
        .loading-spinner { border: 2px solid #f3f3f3; border-top: 2px solid #3b82f6; border-radius: 50%; width: 14px; height: 14px; animation: spin 1s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <h2>Buat Akun Baru</h2>
        <p class="subtitle">Daftar untuk memulai</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input id="name" type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input id="email" type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <button type="button" class="toggle-password" data-target="password">
                        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </button>
                </div>
                 <button type="button" class="gemini-btn" id="generatePasswordBtn">
                    <span id="gemini-btn-text">✨ Buatkan Kata Sandi Aman</span>
                    <div id="gemini-loading" class="loading-spinner" style="display: none;"></div>
                </button>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <div class="password-wrapper">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                     <button type="button" class="toggle-password" data-target="password_confirmation">
                        <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Register</button>
            </div>
             <p class="link">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
        </form>
    </div>

    <script>
        // --- LOGIKA UNTUK SEMUA TOMBOL TOGGLE PASSWORD ---
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.dataset.target;
                const passwordInput = document.getElementById(targetId);
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                this.innerHTML = isPassword 
                    ? `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path><line x1="2" x2="22" y1="2" y2="22"></line></svg>` 
                    : `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>`;
            });
        });

        // --- LOGIKA UNTUK GENERATOR PASSWORD ---
        const generateBtn = document.getElementById('generatePasswordBtn');
        const passwordField = document.getElementById('password');
        const passwordConfirmField = document.getElementById('password_confirmation');
        const btnText = document.getElementById('gemini-btn-text');
        const loadingSpinner = document.getElementById('gemini-loading');

        generateBtn.addEventListener('click', async () => {
            btnText.textContent = 'Membuat...';
            loadingSpinner.style.display = 'block';
            generateBtn.disabled = true;

            const prompt = "Buatkan sebuah kata sandi yang aman, mudah diingat, dan memiliki kombinasi huruf besar, huruf kecil, angka, dan simbol. Panjangnya antara 12 hingga 16 karakter. Hanya berikan kata sandinya saja, tanpa penjelasan tambahan.";
            
            try {
                let chatHistory = [];
                chatHistory.push({ role: "user", parts: [{ text: prompt }] });
                const payload = { contents: chatHistory };
                // PERBAIKAN: API Key dikosongkan agar otomatis diisi oleh sistem Canvas.
                const apiKey = @json($geminiApiKey); // Kunci API akan disediakan oleh Canvas
                const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${apiKey}`;
                
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                
                if (!response.ok) { throw new Error(`HTTP error! status: ${response.status}`); }

                const result = await response.json();
                
                if (result.candidates && result.candidates[0].content && result.candidates[0].content.parts) {
                    const generatedPassword = result.candidates[0].content.parts[0].text.trim();
                    passwordField.value = generatedPassword;
                    passwordConfirmField.value = generatedPassword; // Otomatis isi juga kolom konfirmasi
                } else {
                    console.error('Struktur respons tidak terduga dari API Gemini:', result);
                }
            } catch (error) {
                console.error('Error saat memanggil Gemini API:', error);
            } finally {
                btnText.textContent = '✨ Buatkan Kata Sandi Aman';
                loadingSpinner.style.display = 'none';
                generateBtn.disabled = false;
            }
        });
    </script>
</body>
</html>
