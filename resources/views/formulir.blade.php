@extends('layouts.app') 

@section('title', 'Tambah Jam Mengajar') 

@push('styles')
<style>
/* ... existing styles ... */
.form-container {
    max-width: 900px;
    margin: 0 auto;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid #e5e7eb;
    position: relative;
}
.form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #3b82f6, #60a5fa, #3b82f6);
}
.form-header {
    background: linear-gradient(135deg, #f9fafb, white);
    padding: 24px;
    border-bottom: 1px solid #f3f4f6;
    position: relative;
}
.form-header h3 {
    margin: 0;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
    display: flex;
    align-items: center;
    gap: 12px;
}
.form-header h3::before {
    content: '📝';
    font-size: 1.25rem;
}
.close-btn {
    position: absolute;
    right: 24px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #4b5563;
    transition: all 0.2s ease;
}
.close-btn:hover {
    background: #ef4444;
    color: white;
    transform: translateY(-50%) rotate(90deg);
}
.form-body {
    padding: 24px;
}
.form-row {
    margin-bottom: 24px;
}
.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #374151;
    font-size: 0.875rem;
}
.form-label.required::after {
    content: '*';
    color: #ef4444;
    margin-left: 4px;
    font-weight: bold;
}
.form-control,
.form-select {
    width: 100%;
    padding: 12px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 0.9rem;
    background: white;
    transition: all 0.2s ease;
}
.form-control:focus,
.form-select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}
.radio-group {
    display: flex;
    gap: 16px;
    margin-top: 8px;
}
.radio-item {
    display: flex;
    align-items: center;
    gap: 8px;
}
.time-inputs {
    display: flex;
    align-items: center;
    gap: 12px;
}
.time-separator {
    font-weight: 600;
    color: #6b7280;
}
.button-area {
    padding: 24px;
    background: #f9fafb;
    border-top: 1px solid #f3f4f6;
    margin-top: 24px;
}
.btn-simpan {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}
.btn-simpan:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}
.form-grid {
    display: grid;
    gap: 20px;
}
.form-grid.cols-2 {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}
.form-grid.cols-4 {
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
}
</style>
@endpush 

@section('content')
<div class="form-page py-12">
    <div class="container-custom mx-auto px-4">
        <div class="form-container">
            <div class="form-header">
                <h3>Tambah Jam Mengajar</h3>
                <button type="button" class="close-btn" onclick="window.history.back();" aria-label="Tutup">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="form-body">
              
                <form action="{{ route('admin.jam-mengajar.store') }}" method="POST" id="jamMengajarForm">
                    @csrf 

                    <!-- Section 1: Lokasi dan Metode -->
                    <div class="form-row">
                        <div class="form-grid cols-2">
                            <div>
                                <label class="form-label">Lokasi</label>
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="internal" name="lokasi" value="internal" checked />
                                        <label for="internal">Internal</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="eksternal" name="lokasi" value="eksternal" />
                                        <label for="eksternal">Eksternal</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="form-label">Metode</label>
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="klasikal" name="metode" value="klasikal" checked />
                                        <label for="klasikal">Klasikal</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="virtual" name="metode" value="virtual" />
                                        <label for="virtual">Virtual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Tempat dan Lokasi -->
                    <div class="form-row">
                        <div class="form-grid cols-2">
                            <div>
                                <label for="tempat" class="form-label required">Tempat</label>
                                <select class="form-select" name="tempat" id="tempat" required>
                                    <option selected value="BPSDMD Provinsi Jawa Tengah">BPSDMD Provinsi Jawa Tengah</option>
                                    <option value="Sindoro">Sindoro</option>
                                    <option value="Merapi">Merapi</option>
                                    <option value="Muria">Muria</option>
                                </select>
                            </div>
                            <div>
                                <label for="kabupaten_kota" class="form-label required">Kabupaten/Kota</label>
                                <input type="text" class="form-control" name="kabupaten_kota" id="kabupaten_kota" placeholder="Masukan Kabupaten/Kota" required />
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Waktu dan JP -->
                    <div class="form-row">
                        <div class="form-grid cols-4">
                            <div>
                                <label for="tanggal" class="form-label required">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" required />
                            </div>
                            <div class="time-inputs">
                                <div>
                                    <label for="jam_mulai" class="form-label required">Jam Mulai</label>
                                    <input type="time" class="form-control" name="jam_mulai" id="jam_mulai" required />
                                </div>
                                <span class="time-separator mt-8">-</span>
                                <div>
                                    <label for="jam_selesai" class="form-label required">Jam Selesai</label>
                                    <input type="time" class="form-control" name="jam_selesai" id="jam_selesai" required />
                                </div>
                            </div>
                             <div>
                                <label for="jp" class="form-label required">JP</label>
                                <input type="number" class="form-control" name="jp" id="jp" min="1" readonly required/>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4: Tugas dan Jenis Diklat -->
                     <div class="form-row">
                        <div class="form-grid cols-2">
                            <div>
                                <label for="tugas" class="form-label required">Tugas</label>
                                <select class="form-select" name="tugas" id="tugas" required>
                                    <option selected value="Mengajar">Mengajar</option>
                                    <option value="Membimbing">Membimbing</option>
                                    <option value="Menguji">Menguji</option>
                                </select>
                            </div>
                            <div>
                                <label for="jenis_diklat" class="form-label required">Jenis Diklat</label>
                                <select class="form-select" name="jenis_diklat" id="jenis_diklat" required>
                                    <option selected value="Pelatihan Kepemimpinan Nasional">Pelatihan Kepemimpinan Nasional</option>
                                    <option value="Diklat Prajabatan">Diklat Prajabatan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 5: Nama Diklat -->
                    <div class="form-row">
                        <label for="id_pelatihan" class="form-label required">Nama Diklat</label>
                        <select class="form-select" name="id_pelatihan" id="id_pelatihan" required>
                            <option selected disabled value="">Pilih Nama Diklat...</option>
                            @foreach($daftar_pelatihan as $pelatihan)
                                <option value="{{ $pelatihan->id }}">{{ $pelatihan->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Section 6: Materi -->
                    <div class="form-row">
                        <label for="materi" class="form-label required">Materi</label>
                        <input type="text" class="form-control" name="materi" id="materi" placeholder="Masukkan materi ajar..." required />
                    </div>

                    <!-- Section 7: Widyaiswara -->
                    <div class="form-row">
                        <h4 class="text-lg font-semibold mb-4 text-gray-700">Widyaiswara yang Terlibat</h4>
                        <div class="form-grid cols-2">
                            <div>
                                <label for="nip_widyaiswara_1" class="form-label required">Widyaiswara 1</label>
                                <select class="form-select" name="nip_widyaiswara_1" id="nip_widyaiswara_1" required>
                                    <option selected disabled value="">Pilih Widyaiswara</option>
                                    @foreach($widyaiswara as $wi)
                                    <option value="{{ $wi->nip }}">{{ $wi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="nip_widyaiswara_2" class="form-label">Widyaiswara 2 (Opsional)</label>
                                <select class="form-select" name="nip_widyaiswara_2" id="nip_widyaiswara_2">
                                    <option selected value="">Tidak ada</option>
                                    @foreach($widyaiswara as $wi)
                                    <option value="{{ $wi->nip }}">{{ $wi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="nip_widyaiswara_3" class="form-label">Widyaiswara 3 (Opsional)</label>
                                <select class="form-select" name="nip_widyaiswara_3" id="nip_widyaiswara_3">
                                     <option selected value="">Tidak ada</option>
                                    @foreach($widyaiswara as $wi)
                                    <option value="{{ $wi->nip }}">{{ $wi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="nip_widyaiswara_4" class="form-label">Widyaiswara 4 (Opsional)</label>
                                <select class="form-select" name="nip_widyaiswara_4" id="nip_widyaiswara_4">
                                     <option selected value="">Tidak ada</option>
                                    @foreach($widyaiswara as $wi)
                                    <option value="{{ $wi->nip }}">{{ $wi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="button-area">
                        <button type="submit" class="btn-simpan">💾 Simpan Jadwal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('footer-scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const jamMulai = document.getElementById("jam_mulai");
    const jamSelesai = document.getElementById("jam_selesai");
    const jpInput = document.getElementById("jp");

    function hitungJP() {
        if (jamMulai.value && jamSelesai.value) {
            const mulai = new Date("1970-01-01T" + jamMulai.value + "Z");
            const selesai = new Date("1970-01-01T" + jamSelesai.value + "Z");

            if (selesai > mulai) {
                const diffMs = selesai - mulai;
                const diffMinutes = diffMs / (1000 * 60);
                const jp = Math.round(diffMinutes / 45);
                jpInput.value = jp > 0 ? jp : '';
            } else {
                jpInput.value = '';
            }
        } else {
            jpInput.value = '';
        }
    }

    jamMulai.addEventListener("change", hitungJP);
    jamSelesai.addEventListener("change", hitungJP);
});
</script>
@endsection  

