@extends('layouts.app')

@section('title', 'PROFIL WIDYAISWARA')

@section('content')

<div class="bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Konten unik untuk halaman direktori -->
        <section class="text-center">
            <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-2">Profil Widyaiswara</h2>
            <p class="text-[var(--text-secondary)] max-w-2xl mx-auto">
                Temukan ahli dan spesialis terbaik dari BPSDMD Provinsi Jawa Tengah untuk kebutuhan pelatihan dan pengembangan Anda.
            </p>
        </section>

        <section class="mt-10 max-w-4xl mx-auto">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" fill-rule="evenodd"></path></svg>
                </div>
                <input class="search_bar" placeholder="Pencarian" type="search" />
            </div>
            <div class="flex flex-wrap gap-3 mt-4 justify-center">
                <button class="filter_button_active">Semua</button>
                <button class="filter_button">Widyaiswara Ahli Utama</button>
                <button class="filter_button">Widyaiswara Ahli Madya</button>
                <button class="filter_button">Widyaiswara Ahli Muda</button>
                <button class="filter_button">Widyaiswara Ahli Pertama</button>
            </div>
        </section>

        <section class="profile_grid mt-12">
            @foreach ($profiles as $profile)
            <div 
                class="profile_card cursor-pointer open-modal-button"
                data-photo="{{ $profile['photo'] }}"
                data-name="{{ $profile['name'] }}"
                data-jabatan="{{ $profile['jabatan_lengkap'] }}"
                data-nip="{{ $profile['nip'] }}"
                data-rank="{{ $profile['rank'] }}"
                data-penempatan="{{ $profile['penempatan'] }}"
                data-kompetensi="{{ json_encode($profile['kompetensi']) }}"
            >
                <img alt="Foto {{ $profile['name'] }}" class="profile_photo" src="{{ $profile['photo'] }}" onerror="this.onerror=null;this.src='https://placehold.co/128x128/EBF4FF/7F9CF5?text=Photo';" />
                <h3 class="profile_name">{{ $profile['name'] }}</h3>
                <p class="profile_metadata">
                    {{ $profile['jabatan_singkat'] }}
                </p>
            </div>
            @endforeach
        </section>
    </div>
</div>

<!-- Modal untuk menampilkan pop up detail profil -->
<div id="profileModal" class="modal-overlay">
    <div class="modal-content">
        <!-- 1. Modal Header -->
        <div class="modal-header">
            <h3 class="text-lg font-medium text-gray-900">Profil Widyaiswara</h3>
            <button id="closeModalButton" class="modal-close-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- 2. Modal Body (Bagian yang bisa di-scroll) -->
        <div class="modal-body">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Kolom Kiri: Foto -->
                <div class="md:w-1/3 flex-shrink-0 text-center">
                    <img id="modalPhoto" src="" alt="Foto Profil" class="w-full h-auto rounded-lg object-cover shadow-md">
                </div>

                <!-- Kolom Kanan: Informasi Detail -->
                <div class="md:w-2/3">
                    <table class="w-full text-left info-table">
                        <tbody>
                            <tr><td>Nama</td><td id="modalName"></td></tr>
                            <tr><td>NIP</td><td id="modalNip"></td></tr>
                            <tr><td>Pangkat</td><td id="modalRank"></td></tr>
                            <tr><td>Jabatan</td><td id="modalJabatan"></td></tr>
                            <tr><td>Penempatan</td><td id="modalPenempatan"></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bagian Kompetensi Mengajar -->
            <div class="mt-8">
                <h4 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Kompetensi Mengajar</h4>
                <div class="overflow-x-auto rounded-lg border">
                    <table class="kompetensi-table">
                        <thead>
                            <tr>
                                <th class="w-12">#</th>
                                <th>Materi</th>
                                <th>Jenis Diklat</th>
                            </tr>
                        </thead>
                        <tbody id="modalKompetensiBody">
                            <!-- Baris-baris kompetensi akan diisi oleh JavaScript di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer-scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Ambil semua elemen yang kita butuhkan
    const modal = document.getElementById('profileModal');
    const closeModalButton = document.getElementById('closeModalButton');
    const profileCards = document.querySelectorAll('.open-modal-button');

    // Elemen di dalam modal yang akan diisi data
    const modalPhoto = document.getElementById('modalPhoto');
    const modalName = document.getElementById('modalName');
    const modalJabatan = document.getElementById('modalJabatan');
    const modalNip = document.getElementById('modalNip');
    const modalRank = document.getElementById('modalRank');
    const modalPenempatan = document.getElementById('modalPenempatan');
    const modalKompetensiBody = document.getElementById('modalKompetensiBody');

    // 2. Tambahkan event listener untuk setiap kartu profil
    profileCards.forEach(card => {
        card.addEventListener('click', function () {
            // 3. Ambil data dari atribut data-* kartu yang diklik
            modalPhoto.src = this.dataset.photo;
            modalName.textContent = this.dataset.name;
            modalJabatan.textContent = this.dataset.jabatan;
            modalNip.textContent = this.dataset.nip;
            modalRank.textContent = this.dataset.rank;
            modalPenempatan.textContent = this.dataset.penempatan;
            const kompetensi = JSON.parse(this.dataset.kompetensi);

            // 4. Bangun tabel kompetensi secara dinamis
            // Kosongkan dulu isi tabel sebelumnya
            modalKompetensiBody.innerHTML = ''; 
            
            if (kompetensi.length > 0) {
                kompetensi.forEach((item, index) => {
                    // Buat baris baru (tr) untuk setiap item
                    const row = document.createElement('tr');
                    // Isi baris dengan data
                    row.innerHTML = `
                        <td class="px-6 py-4 font-medium text-gray-900">${index + 1}</td>
                        <td class="px-6 py-4">${item.materi}</td>
                        <td class="px-6 py-4">${item.jenis_diklat}</td>
                    `;
                    // Tambahkan baris ke dalam body tabel
                    modalKompetensiBody.appendChild(row);
                });
            } else {
                // Jika tidak ada data kompetensi
                const row = document.createElement('tr');
                row.innerHTML = `<td colspan="3" class="text-center py-4">Tidak ada data kompetensi.</td>`;
                modalKompetensiBody.appendChild(row);
            }

            // 5. Tampilkan modal
            modal.classList.add('show');
        });
    });

    // Fungsi untuk menutup modal
    function closeModal() {
        modal.classList.remove('show');
    }

    closeModalButton.addEventListener('click', closeModal);
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});
</script>

