<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang - Aplikasi Anda</title>

    <!-- Memuat Font dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- A. KODE CSS UNTUK STYLING -->
    <style>
        /* Mendefinisikan variabel warna dan font untuk kemudahan kustomisasi */
        :root {
            --primary-color: #4f46e5; /* Warna utama (ungu kebiruan) */
            --secondary-color: #111827; /* Warna teks utama (hitam gelap) */
            --subtle-color: #6b7280; /* Warna teks sekunder (abu-abu) */
            --background-color: #f9fafb; /* Warna latar belakang halaman */
            --font-family: 'Inter', sans-serif;
        }

        /* Reset dasar dan pengaturan font untuk seluruh halaman */
        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            color: var(--secondary-color);
            margin: 0;
            line-height: 1.6;
        }

        /* Container utama untuk membatasi lebar konten */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Bagian Header (Paling Atas) */
        .app-header {
            display: flex; /* Menggunakan flexbox untuk penataan */
            justify-content: space-between; /* Mendorong item ke sisi berlawanan */
            align-items: center; /* Menyelaraskan item secara vertikal di tengah */
            padding: 1.5rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            color: var(--secondary-color);
        }

        /* Navigasi di Header */
        .main-nav a {
            text-decoration: none;
            color: var(--subtle-color);
            font-weight: 500;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }

        .main-nav a:hover {
            color: var(--primary-color);
        }

        .main-nav .btn {
            background-color: var(--primary-color);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 600;
        }

        .main-nav .btn:hover {
            background-color: #4338ca; /* Warna sedikit lebih gelap saat hover */
            color: white;
        }

        /* Menu untuk Pengguna yang Sudah Login */
        .user-menu {
            position: relative; /* Diperlukan untuk dropdown */
            margin-left: 1.5rem;
        }
        
        .user-menu-button {
            background: none;
            border: none;
            cursor: pointer;
            font-family: var(--font-family);
            font-size: 1rem;
            font-weight: 500;
            display: flex;
            align-items: center;
        }
        
        .user-menu-button svg {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        /* Dropdown Menu */
        .dropdown-menu {
            display: none; /* Sembunyi secara default */
            position: absolute;
            right: 0;
            top: 100%;
            margin-top: 0.5rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
            width: 200px;
            padding: 0.5rem 0;
            z-index: 10;
        }
        
        .dropdown-menu.show {
            display: block; /* Tampilkan saat class 'show' ditambahkan oleh JavaScript */
        }
        
        .dropdown-menu a, .dropdown-menu button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            color: var(--secondary-color);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .dropdown-menu a:hover, .dropdown-menu button:hover {
            background-color: #f3f4f6; /* Warna latar belakang saat hover */
        }

        /* Bagian Hero (Konten Utama di Tengah) */
        .hero-section {
            text-align: center;
            padding: 6rem 0;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }
        
        .hero-title .highlight {
            color: var(--primary-color);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            max-width: 600px;
            margin: 0 auto 2.5rem auto;
            color: var(--subtle-color);
        }

        .hero-cta {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.125rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.2);
        }
        
        .hero-cta:hover {
            transform: translateY(-2px); /* Efek sedikit terangkat saat hover */
            box-shadow: 0 7px 10px rgba(79, 70, 229, 0.2);
        }

        /* Bagian Footer (Paling Bawah) */
        .app-footer {
            text-align: center;
            padding: 2rem 0;
            margin-top: 4rem;
            border-top: 1px solid #e5e7eb;
            color: var(--subtle-color);
        }
    </style>
</head>
<body>

    <!-- B. STRUKTUR HTML -->

    <!-- Header Aplikasi -->
    <header class="container">
        <div class="app-header">
            <a href="{{ url('/') }}" class="logo">Aplikasi PKL</a>

            <!-- Navigasi Utama -->
            <nav class="main-nav">
                {{-- C. LOGIKA TAMPILAN DINAMIS --}}
                
                {{-- Jika pengguna adalah tamu (belum login) --}}
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}" class="btn">Register</a>
                @endguest

                {{-- Jika pengguna sudah login --}}
                @auth
                    <div class="user-menu">
                        {{-- Tombol ini akan menampilkan nama pengguna yang login --}}
                        <button class="user-menu-button" id="userMenuButton">
                            {{ Auth::user()->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        {{-- Menu dropdown yang awalnya tersembunyi --}}
                        <div class="dropdown-menu" id="dropdownMenu">
                            {{-- Link ke dashboard, cerdas memilih berdasarkan role --}}
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}">Ke Dashboard</a>
                            @else
                                <a href="{{ route('dashboard') }}">Ke Dashboard</a>
                            @endif
                            
                            {{-- Tombol Logout --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </nav>
        </div>
    </header>

    <!-- Konten Utama Halaman -->
    <main>
        <section class="hero-section">
            <div class="container">
                <h1 class="hero-title">
                    Platform Manajemen Modern <br> untuk <span class="highlight">Proyek APP</span>
                </h1>
                <p class="hero-subtitle">
                    Ini adalah kerangka awal yang kokoh untuk aplikasi yang akan di buat di masa yang akan mendatang. Dibangun dengan Laravel, platform ini siap dikembangkan lebih lanjut sesuai kebutuhan spesifik untuk tugas PKL.
                </p>
                
                {{-- Logika PHP dipisahkan dari HTML untuk mencegah error parsing. --}}
                @php
                    // Menentukan URL tujuan untuk tombol "Mulai Sekarang" secara dinamis.
                    // Ini adalah cara yang lebih bersih untuk menangani logika kompleks di dalam view.
                    $ctaUrl = route('register'); // Default untuk tamu
                    if (Auth::check()) { // Cek jika pengguna sudah login
                        $ctaUrl = Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard');
                    }
                @endphp
                <a href="{{ $ctaUrl }}" class="hero-cta">
                    Mulai Sekarang
                </a>

            </div>
        </section>
    </main>

    <!-- Footer Aplikasi -->
    <footer class="app-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Aplikasi PKL Anda. Hak Cipta Dilindungi.</p>
        </div>
    </footer>


    <!-- D. JAVASCRIPT UNTUK INTERAKSI -->
    {{-- PERBAIKAN: Seluruh blok script hanya akan dirender jika pengguna sudah login. --}}
    {{-- Ini mencegah browser mencoba menjalankan script kosong yang bisa menyebabkan error. --}}
    @auth
    <script>
        // Ambil elemen tombol dan menu dropdown dari HTML
        const userMenuButton = document.getElementById('userMenuButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Tambahkan event listener untuk 'click' pada tombol
        userMenuButton.addEventListener('click', function(event) {
            // Hentikan event agar tidak langsung ditangkap oleh window, mencegah menu langsung tertutup
            event.stopPropagation();
            // Toggle (tambah/hapus) class 'show' pada menu dropdown
            dropdownMenu.classList.toggle('show');
        });

        // Menutup dropdown jika pengguna mengklik di luar area menu
        window.addEventListener('click', function(event) {
            // Cek apakah menu sedang ditampilkan DAN klik terjadi di luar tombol DAN di luar menu itu sendiri
            if (dropdownMenu.classList.contains('show') && !userMenuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>
    @endauth
</body>
</html>
