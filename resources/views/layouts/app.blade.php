<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'BPSDMD Jawa Tengah')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
      :root {
        --primary-color: #0056b3;
        --secondary-color: #f8f9fa;
        --background-color: #f8f9fa;
        --text-primary: #343a40;
        --text-secondary: #6c757d;
        --accent-color: #0056b3;
      }
      body {
        font-family: "Inter", sans-serif;
        background-color: var(--background-color);
        color: var(--text-primary);
      }
      .header {
        @apply sticky top-0 bg-white shadow-md py-4 px-6 md:px-10 flex justify-between items-center z-10;
      }
      .header_button {
        @apply inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-[var(--primary-color)] border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500;
      }
      .header_link {
        @apply text-sm font-medium text-[var(--text-secondary)] hover:text-[var(--primary-color)] transition-colors;
      }
      .headline {
        @apply text-4xl font-bold text-[var(--text-primary)] mt-8 mb-4 text-center;
      }
      .search_bar {
        @apply w-full p-4 pl-12 text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent;
      }
      .filter_button {
        @apply px-4 py-2 text-sm font-medium rounded-full bg-white border border-gray-300 text-[var(--text-secondary)] hover:bg-gray-100 transition-colors;
      }
      .filter_button_active {
        @apply px-4 py-2 text-sm font-medium rounded-full bg-[var(--accent-color)] text-white border border-transparent;
      }
      .profile_grid {
        @apply grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8;
      }
      .profile_card {
        @apply bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl;
      }
      .profile_photo {
        @apply w-32 h-32 rounded-full object-cover mb-4 border-4 border-white shadow-lg;
      }
      .profile_name {
        @apply text-xl font-bold text-[var(--text-primary)] mb-1;
      }
      .profile_metadata {
        @apply text-sm text-[var(--text-secondary)] mb-3;
      }
      .profile_specialization {
        @apply flex flex-wrap gap-2 mt-2 justify-center;
      }
      .specialization_tag {
        @apply px-3 py-1 text-xs font-medium rounded-full bg-[var(--secondary-color)] text-[var(--text-secondary)];
      }
    </style>
</head>
<body class="bg-[var(--background-color)]">
    <div class="min-h-screen flex flex-col">
        
        <header class="header">
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <svg class="w-8 h-8 text-[var(--primary-color)]" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z" fill="currentColor"></path></svg>
                    <h1 class="text-xl font-bold text-[var(--text-primary)]">BPSDMD App</h1>
                </a>
                <nav class="hidden md:flex items-center gap-6">
                    <a href="{{ route('dashboard') }}" class="text-sm font-medium text-gray-500 hover:text-blue-600">Dashboard</a>
                    <a href="{{ route('widyaiswara.index') }}" class="text-sm font-medium text-gray-500 hover:text-blue-600">Profil Widyaiswara</a>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-blue-600">Info Ajar</a>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-blue-600">Statistik</a>
                </nav>
            </div>
            <div class="relative">
                @auth
                    <div class="flex items-center gap-4">
                        <span class="text-sm font-medium text-gray-700">Halo, {{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="header_link">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>
        </header>

        <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @yield('content')
        </main>

        <footer class="text-center py-4 text-sm text-gray-500 border-t bg-white">
            © {{ date('Y') }} BPSDMD Provinsi Jawa Tengah. All rights reserved.
        </footer>
    </div>
</body>
</html>