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
                'penempatan' => 'BPSDMD Prov.Jateng',
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
                'penempatan' => 'BPSDMD Prov.Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Agenda 1: Kepemimpinan Pancasila dan Bela Negara', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Agenda 1: Sikap Perilaku Bela Negara', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 2: Nilai-nilai Dasar PNS', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Agenda 3: Pengendalian Pekerjaan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat IV'],
                    ['materi' => 'Aktualisasi/ Habituasi (80 Hari Kalender)', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Akuntabilitas PNS', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Analisis dan Evaluasi Resiko', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Analisis Isu Kontemporer', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Anti Korupsi', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Anti Korupsi', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'ASN Ber-AKHLAK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'ASN Ber-AKHLAK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Asta Cita Ketujuh (Memperkuat Pencegahan dan Pemberantasan Korupsi dan Narkoba)	', 'jenis_diklat' => 'Diklat Kepemimpinan'],
                    ['materi' => 'Berbagi Pengalaman Hasil VKN', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Bimbingan 1 Penyusun KK', 'jenis_diklat' => '	Diklat Teknis'],
                    ['materi' => 'Bimbingan 1 penyusunan KK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Bimbingan 2 penyusunan KK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Bimbingan 2 penyusunan KK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Bimbingan Penyusunan Karya Tulis Ilmiah', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Bimbingan penyusunan KK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Bimbingan Penyusunan Rencana Aksi', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Bimbingan Penyusunan Tugas Akhir', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'BLC', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Building Learning Commitment (BLC)', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Ceramah Core Values dan Employee Branding ASN', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Ceramah Energi Kepemimpinan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Etika dan Integritas ASN', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Ceramah Integritas Kepemimpinan', 'jenis_diklat' => '	Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Isu Aktual dalam Kepemimpinan Strategis', 'jenis_diklat' => '	Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Isu Strategis: Integritas Kepemimpinan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Isu Strategis: Tema PKN Tingkat II', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Isu Tema: Visitasi Kepemimpinan Nasional', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Kebijakan dan Tidak Lanjut Hasil Pelatihan', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat III'],
                    ['materi' => 'Ceramah Kebijakan dan Tindak Lanjut Hasil Pelatihan', 'jenis_diklat' => '	Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Ceramah Kebijakan Pengembangan SDA dan Nilai-nilai ASN', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Ceramah MTSL', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Ceramah Visitasi', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                    ['materi' => 'Coaching Virtual ( Pembimbingan )', 'jenis_diklat' => 'Diklat Prajabatan'],
                    ['materi' => 'Core Value ASN', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Core Value ASN BerAKHLAK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Core Value ASN BerAKHLAK', 'jenis_diklat' => 'Diklat Teknis'],
                    ['materi' => 'Core Values ASN berAKHLAK', 'jenis_diklat' => 'Diklat Fungsional'],
                    ['materi' => 'Desain', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                      

                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'Dr. Ir. SUPRIYANTO, M.Si.',
                'nip' => '196205171991031004',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-12-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov.Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'SUDIRMAN MUSTAFA, SH, M.Hum',
                'nip' => '196209161995011001',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-10-2020)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 23-04-2020',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'Drs. SISWANTA JAKA PURNAMA, Apt., M.Kes.',
                'nip' => '196310281989111001',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-10-2020)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 01-04-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'Ir. YATNO ISWORO,MP',
                'nip' => '196410101999031002',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-10-2023))',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 13-02-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
                        [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'DWI TITI SUNDARI, SKM, M.Kes',
                'nip' => ' 196512131988032004',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => '	Pembina (IV/a) (TMT 01-04-2013)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 14-03-2013)',
                'penempatan' => 'BPTK Gombong',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
                        [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Ir. YOYON INDRAYANA, M.T',
                'nip' => '196607221993011001',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => '	Pembina Utama Muda (IV/c) (TMT 01-04-2015)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 11-02-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'Ir. WARDI ASTUTI, MPD',
                'nip' => '196608181992032015',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-04-2022)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 19-03-2019)',
                'penempatan' => 'BPSDM Soropadan',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	IKBAL KHAFID, S.IP, MSi',
                'nip' => '196705041986031002',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2022)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 29-03-2016)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'GIGUS NURYATNO, A.Pi., M.A.P.',
                'nip' => '196708221991031011',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-10-2015)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 29-02-2012)',
                'penempatan' => 'BPSDM Peternakan',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Drs. EKO SUPRAYITNO, MM',
                'nip' => '	196709251993031004',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-10-2019)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 04-04-2022)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Drs. SUMARNO, M.Si',
                'nip' => '196807041988031003',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Utama Muda (IV/c) (TMT 01-04-2025)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 12-03-2018)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'HARINI SETIJOWATI, SKM, M.HSc.',
                'nip' => '196811091993032005',
                'jabatan_singkat' => 'WIDYASWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 18-03-2019)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'DIYAH MUBAROKAH AKHADIYATI, S.Pi, M.Pi.',
                'nip' => '196901091997032002',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Utama Muda (IV/c) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 06-11-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'SRIYATUN, S.Kep, MM.',
                'nip' => '	196901121989032005',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 18-03-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'ARIF EFENDY, SH, MM.',
                'nip' => '196911021990031003',
                'jabatan_singkat' => 'WIDYASWARA AHLI MUDA',
                'rank' => '	Pembina (IV/a) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 01-04-2016)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'Drs. HERU GUNAWAN, MM.',
                'nip' => 	'196911091990031006',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 20-08-2021)',
                'penempatan' => '	BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Dr. SUDALMA, S.SI, M.Si',
                'nip' => '	197003021998031009',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Tingkat I (IV/b) (TMT 01-04-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 11-02-2021)',
                'penempatan' => '	BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'MUHAMMAD ALAZIZ, SE, MM.',
                'nip' => '	197003142005011008',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Tingkat I (IV/b) (TMT 01-10-2023))',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MADYA (TMT 15-01-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'AGUS PUJIANTO, SH, MM',
                'nip' => '197008101994031004',
                'jabatan_singkat' => 'WIDYASWARA AHLI PERTAMA',
                'rank' => 'Penata Tingkat I (III/d) (TMT 01-10-2015)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI PERTAMA (TMT 05-01-2017)',
                'penempatan' => 	'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'AGUS ANDRIYANTO, S.Sos, MM',
                'nip' => '197008241995031002',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 25-10-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'TRI MARDIYANTI RATNASARI, SE, M.Acc',
                'nip' => '197103171997032005',
                'jabatan_singkat' => 'WIDYASWARA AHLI MUDA',
                'rank' => '	Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'KRISTIANA WIDIAWATI, SPi, MT',
                'nip' => '197112041999032007',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 04-04-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	SANTOSA, S.Kep, MM',
                'nip' => '	197212101992031004',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Tingkat I (IV/b) (TMT 01-04-2022)',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MADYA (TMT 13-02-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '		Dr. ERNI IRAWATI, SE, M.Pd',
                'nip' => '		197308292009012002',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '		Pembina Tingkat I (IV/b) (TMT 01-04-2024))',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MADYA (TMT 01-04-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'EDI WINARNO AS, ST, M.Kom',
                'nip' => '	197502022005011004',
                'jabatan_singkat' => 'WIDYASWARA AHLI MUDA',
                'rank' => '	Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	ANDIS TRIYANTO, S.KM, M.Kes',
                'nip' => '	197505041999031006',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2025)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 16-06-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'Dra. NILA AGUSTINA, MPA.',
                'nip' => '	197608171999032005',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MADYA (TMT 15-01-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	YUNI INDARTI, S.SOS,MM',
                'nip' => '	197906202009012003',
                'jabatan_singkat' => 'WIDYASWARA AHLI MUDA',
                'rank' => '	Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	MUCHAMAD RIZAL, ST, M.Sc, M.Eng.',
                'nip' => '	198008272005011010',
                'jabatan_singkat' => 'WIDYASWARA AHLI MUDA',
                'rank' => '	Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => '	Dr. ENDANG RIAGUSTRIANINGSIH,SIP, MPd',
                'nip' => '	198208162010012020',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => '	Pembina Tingkat I (IV/b) (TMT 01-04-2025)',
                'jabatan_lengkap' => '	WIDYAISWARA AHLI MADYA (TMT 23-09-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
                'kompetensi' => [
                    ['materi' => 'Advokasi Penyampaian ke Lokus', 'jenis_diklat' => 'Diklat Kepemimpinan Tingkat II'],
                ]
            ],
            
           
            
            [
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=M',
                'name' => 'AGUS ANDRIYANTO, S.Sos, MM',
                'nip' => '197008241995031002',
                'jabatan_singkat' => 'WIDYASWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 25-10-2021)',
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
