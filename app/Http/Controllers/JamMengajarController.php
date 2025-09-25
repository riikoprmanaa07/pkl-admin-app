<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Calendar;
use App\Models\Widyaiswara;
use App\Models\JamMengajar;
// Jika Anda menggunakan Form Request khusus untuk validasi, jangan lupa impor di sini
// use App\Http\Requests\StoreJamMengajarRequest;

class JamMengajarController extends Controller
{
    /**
     * Menampilkan formulir untuk membuat entri jam mengajar baru.
     * Logika ini dipindahkan dari WidyaiswaraController@createJamMengajar.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        // 1. Mengambil semua data pelatihan dari tabel 'calendar'.
        //    Kita urutkan berdasarkan 'title' agar tampilan di dropdown rapi secara alfabetis.
        $daftar_pelatihan = Calendar::orderBy('title', 'asc')->get(['id', 'title']);
        
        // 2. Mengambil semua data widyaiswara dari database, diurutkan berdasarkan nama.
        $widyaiswara = Widyaiswara::orderBy('name', 'asc')->get(['nip', 'name']);
        
        // 3. Mengirim kedua data tersebut ke view 'formulir'.
        //    Variabel $daftar_pelatihan dan $widyaiswara sekarang akan tersedia di formulir.blade.php.
        return view('formulir', compact('daftar_pelatihan', 'widyaiswara'));
    }

    /**
     * Menyimpan data jam mengajar baru ke database.
     * Logika ini dipindahkan dari WidyaiswaraController@storeJamMengajar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk dari formulir.
        //    Aturan ini disesuaikan dengan field-field yang ada di formulir.blade.php.
        $validatedData = $request->validate([
            'lokasi' => 'required|string|in:internal,eksternal',
            'metode' => 'required|string|in:klasikal,virtual',
            'tempat' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'jp' => 'required|integer|min:1',
            'tugas' => 'required|string|max:255',
            'jenis_diklat' => 'required|string|max:255',
            'id_pelatihan' => 'required|exists:calendar,id', // Memastikan id_pelatihan ada di tabel calendar
            'materi' => 'required|string',
            'nip_widyaiswara_1' => 'required|exists:widyaiswara,nip', // Memastikan NIP widyaiswara 1 valid
            'nip_widyaiswara_2' => 'nullable|different:nip_widyaiswara_1|exists:widyaiswara,nip',
            'nip_widyaiswara_3' => 'nullable|different:nip_widyaiswara_1,nip_widyaiswara_2|exists:widyaiswara,nip',
            'nip_widyaiswara_4' => 'nullable|different:nip_widyaiswara_1,nip_widyaiswara_2,nip_widyaiswara_3|exists:widyaiswara,nip',
        ]);

        // 2. Simpan data ke database menggunakan Model JamMengajar.
        try {
            JamMengajar::create([
                'id_pelatihan' => $validatedData['id_pelatihan'],
                'nip_widyaiswara' => $validatedData['nip_widyaiswara_1'], // Kolom primary
                'tanggal' => $validatedData['tanggal'],
                'jam_mulai' => $validatedData['jam_mulai'],
                'jam_selesai' => $validatedData['jam_selesai'],
                'jp' => $validatedData['jp'],
                'lokasi' => $validatedData['lokasi'],
                'metode' => $validatedData['metode'],
                'tempat' => $validatedData['tempat'],
                'kabupaten_kota' => $validatedData['kabupaten_kota'],
                'tugas' => $validatedData['tugas'],
                'jenis_diklat' => $validatedData['jenis_diklat'],
                'materi' => $validatedData['materi'],
                'nip_widyaiswara_2' => $request->input('nip_widyaiswara_2'),
                'nip_widyaiswara_3' => $request->input('nip_widyaiswara_3'),
                'nip_widyaiswara_4' => $request->input('nip_widyaiswara_4'),
            ]);

            // 3. Redirect ke halaman formulir lagi dengan pesan sukses.
            return redirect()->route('admin.jam-mengajar.create')->with('success', 'Jadwal mengajar berhasil disimpan!');

        } catch (\Exception $e) {
            // Jika terjadi error, kembali ke form dengan data input sebelumnya dan pesan error.
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }
}

