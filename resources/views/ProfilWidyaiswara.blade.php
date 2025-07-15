@extends('layouts.app')

@section('title', 'Direktori Widyaiswara Ahli')

@section('content')

    <section class="text-center">
        <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-2">Direktori Widyaiswara Ahli</h2>
        <p class="text-[var(--text-secondary)] max-w-2xl mx-auto">
            Temukan ahli dan spesialis terbaik dari BPSDMD Provinsi Jawa Tengah untuk kebutuhan pelatihan dan pengembangan Anda.
        </p>
    </section>

    <section class="mt-10 max-w-4xl mx-auto">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" fill-rule="evenodd"></path></svg>
            </div>
            <input class="search_bar" placeholder="Cari nama atau spesialisasi" type="search" />
        </div>
        <div class="flex flex-wrap gap-3 mt-4 justify-center">
            <button class="filter_button_active">Semua</button>
            <button class="filter_button">Ahli Utama</button>
            <button class="filter_button">Ahli Madya</button>
            <button class="filter_button">Ahli Muda</button>
            <button class="filter_button">Ahli Pertama</button>
        </div>
    </section>

    <section class="profile_grid mt-12">
        @foreach ($profiles as $profile)
        <div class="profile_card">
            <img alt="Foto {{ $profile['name'] }}" class="profile_photo" src="{{ $profile['photo'] }}" />
            <h3 class="profile_name">{{ $profile['name'] }}</h3>
            <p class="profile_metadata">
                NIP: {{ $profile['nip'] }} | {{ $profile['rank'] }}
            </p>
            <div class="profile_specialization">
                @foreach ($profile['specializations'] as $specialization)
                <span class="specialization_tag">{{ $specialization }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </section>

@endsection