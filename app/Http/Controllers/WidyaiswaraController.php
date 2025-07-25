<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Impor kelas View

class WidyaiswaraController extends Controller
{

    public function index(): View
    {
        // Data profil Widyaiswara yang akan ditampilkan
        $profiles = [
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Dra. MUKAROMAH SYAKOER, M.M.',
                'nip' => '196102171985032008',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 2: Kepemimpinan Pelayanan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Analisis Kebijakan Publik', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat III'],
                    ['materi' => 'Building Learning Commitment', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Ceramah Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Coaching dan Mentoring', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV']
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	HENDRI SANTOSA, SE, Ak, M.Si. CA',
                'nip' => '196112261983031001',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 2015-04-01)  ',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 2021-11-19)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Dra. MUKAROMAH SYAKOER, M.M.',
                'nip' => '196102171985032008',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Dra. MUKAROMAH SYAKOER, M.M.',
                'nip' => '196102171985032008',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Dra. MUKAROMAH SYAKOER, M.M.',
                'nip' => '196102171985032008',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
        ];
        // Mengembalikan view dengan data profil
        return view('ProfilWidyaiswara', ['profiles' => $profiles]);
    }
}
