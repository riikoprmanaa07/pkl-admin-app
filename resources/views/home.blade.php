<x-app-layout>
    {{-- Navbar --}}
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-xl font-bold text-blue-600">PAK Wi Online</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Dashboard</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Profile</a>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero / Welcome Section --}}
    <header class="bg-blue-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-800">Selamat Datang di PAK Wi Online!</h1>
            <p class="mt-4 text-gray-600">Kamu berhasil login dengan NIP. Nikmati fitur-fitur yang tersedia.</p>
        </div>
    </header>

    {{-- Card / Konten --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-gray-800">Profil Saya</h2>
                <p class="mt-2 text-gray-600">Lihat dan perbarui informasi pribadi kamu.</p>
                <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Lihat Profil →</a>
            </div>

            <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-gray-800">Pengaturan</h2>
                <p class="mt-2 text-gray-600">Atur preferensi dan keamanan akun kamu.</p>
                <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Pengaturan →</a>
            </div>

            <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
                <h2 class="text-xl font-semibold text-gray-800">Bantuan & Tips</h2>
                <p class="mt-2 text-gray-600">Dapatkan panduan dan tips penggunaan sistem.</p>
                <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Pelajari Lebih Lanjut →</a>
            </div>
        </div>
    </main>
</x-app-layout>
