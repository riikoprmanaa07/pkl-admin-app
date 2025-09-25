<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kompetensi;

class KompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Data diekstrak dari WidyaiswaraController lama untuk konsistensi.
     */
    public function run(): void
    {

        $profiles = [
            // Data Widyaiswara lengkap beserta kompetensinya akan dimasukkan di sini
             [
                'nip' => '196102171985032008',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 2: Kepemimpinan Pelayanan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 2: Nilai-nilai Dasar PNS', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Akuntabilitas Kinerja', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat III'],
                ]
            ],
             [
                'nip' => '196112261983031001',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 2: Nilai-nilai Dasar PNS', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 3: Pengendalian Pekerjaan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '196205171991031004',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '196209161995011001',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '196310281989111001',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
            [
                'nip' => '196410101999031002',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
            [
                'nip' => '196512131988032004',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
            [
                'nip' => '196607221993011001',
                'kompetensi' => [
                    ['materi' => 'Mengelola Perubahan', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'nip' => '196608181992032015',
                'kompetensi' => [
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
            [
                'nip' => '196705041986031002',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                     ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
            [
                'nip' => '196708221991031011',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
            [
                'nip' => '196709251993031004',
                'kompetensi' => [
                     ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                     ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
             [
                'nip' => '196807041988031003',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                     ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '196811091993032005',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
            [
                'nip' => '196901091997032002',
                'kompetensi' => [
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                     ['materi' => 'Agenda 2: Kepemimpinan Pelayanan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '196901121989032005',
                'kompetensi' => [
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 2: Kepemimpinan Pelayanan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '196911021990031003',
                'kompetensi' => [
                   ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                   ['materi' => 'Integritas, Anti Korupsi dan ASN Berakhlak', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                ]
            ],
            [
                'nip' => '196911091990031006',
                'kompetensi' => [
                    ['materi' => 'Mengelola Perubahan', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                    ['materi' => 'Administrasi Kependudukan', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                ]
            ],
            [
                'nip' => '197003021998031009',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
            [
                'nip' => '197003142005011008',
                'kompetensi' => [
                   ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                   ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
            [
                'nip' => '197008101994031004',
                'kompetensi' => [
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 2: Nilai-nilai Dasar PNS', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
             [
                'nip' => '197008241995031002',
                'kompetensi' => [
                   ['materi' => 'Mengelola Perubahan', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                   ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '197103171997032005',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '197112041999032007',
                'kompetensi' => [
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
             [
                'nip' => '197212101992031004',
                'kompetensi' => [
                    ['materi' => 'Mengelola Perubahan', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                    ['materi' => 'Afirmasi', 'jenis_diklat' => 'Diklat Teknis'],
                ]
            ],
             [
                'nip' => '197301101992031001',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
            [
                'nip' => '197308292009012002',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
            [
                'nip' => '197502022005011004',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '197505041999031006',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                ]
            ],
             [
                'nip' => '197608171999032005',
                'kompetensi' => [
                     ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                     ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '197906202009012003',
                'kompetensi' => [
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '198008272005011010',
                'kompetensi' => [
                    ['materi' => 'Integritas, Anti Korupsi dan ASN Berakhlak', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
             [
                'nip' => '198208162010012020',
                'kompetensi' => [
                    ['materi' => 'Integritas, Anti Korupsi dan ASN Berakhlak', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                    ['materi' => 'Advokasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                ]
            ],
        ];

        foreach ($profiles as $profile) {
            if (isset($profile['kompetensi']) && is_array($profile['kompetensi'])) {
                foreach ($profile['kompetensi'] as $kompetensi) {
                    ([
                        'nip_widyaiswara' => trim($profile['nip']),
                        'materi' => $kompetensi['materi'],
                        'jenis_diklat' => $kompetensi['jenis_diklat'],
                    ]);
                }
            }
        }
    }
}
