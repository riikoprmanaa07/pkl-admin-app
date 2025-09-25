<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Widyaiswara;
use Illuminate\Support\Facades\Schema;

class WidyaiswaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menonaktifkan pengecekan foreign key untuk mengizinkan truncate.
        Schema::disableForeignKeyConstraints();

        // Mengosongkan tabel untuk mencegah duplikasi jika seeder dijalankan lagi.
        Widyaiswara::truncate();

        // Mengaktifkan kembali pengecekan foreign key setelah selesai.
        Schema::enableForeignKeyConstraints();

        $profiles = [
            [
                'photo' => 'images/dra mukaroh.jpg',
                'name' => 'Dra. MUKAROMAH SYAKOER, M.M.',
                'nip' => '196102171985032008',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov.Jateng',
            ],
            [
                'photo' => 'images/hendri santoso.jpg',
                'name' => 'HENDRI SANTOSA, SE, Ak, M.Si. CA',
                'nip' => '196112261983031001',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 2015-04-01)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 2021-11-19)',
                'penempatan' => 'BPSDMD Prov.Jateng',
            ],
            [
                'photo' => 'images/supriyanto.jpg',
                'name' => 'Dr. Ir. SUPRIYANTO, M.Si.',
                'nip' => '196205171991031004',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-12-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)',
                'penempatan' => 'BPSDMD Prov.Jateng',
            ],
            [
                'photo' => 'images/sudirman.jpg',
                'name' => 'SUDIRMAN MUSTAFA, SH, M.Hum',
                'nip' => '196209161995011001',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Madya (IV/d) (TMT 01-10-2020)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 23-04-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/siswanta.jpg',
                'name' => 'Drs. SISWANTA JAKA PURNAMA, Apt., M.Kes.',
                'nip' => '196310281989111001',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-10-2020)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 01-04-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/yatno isworo.jpg',
                'name' => 'Ir. YATNO ISWORO,MP',
                'nip' => '196410101999031002',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-10-2023))',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 13-02-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/dwi titi.jpg',
                'name' => 'DWI TITI SUNDARI, SKM, M.Kes',
                'nip' => '196512131988032004',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina (IV/a) (TMT 01-04-2013)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 14-03-2013)',
                'penempatan' => 'BPTK Gombong',
            ],
            [
                'photo' => 'images/yoyon.jpeg',
                'name' => 'Ir. YOYON INDRAYANA, M.T',
                'nip' => '196607221993011001',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2015)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 11-02-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/wardi astuti.jpg',
                'name' => 'Ir. WARDI ASTUTI, MPD',
                'nip' => '196608181992032015',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama (IV/e) (TMT 01-04-2022)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI UTAMA (TMT 19-03-2019)',
                'penempatan' => 'BPSDM Soropadan',
            ],
            [
                'photo' => 'images/ikhbal khafid.jpeg',
                'name' => 'IKBAL KHAFID, S.IP, MSi',
                'nip' => '196705041986031002',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2022)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 29-03-2016)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/gigus nuryatno.jpg',
                'name' => 'GIGUS NURYATNO, A.Pi., M.A.P.',
                'nip' => '196708221991031011',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-10-2015)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 29-02-2012)',
                'penempatan' => 'BPSDM Peternakan',
            ],
            [
                'photo' => 'images/eko suprayitno.jpeg',
                'name' => 'Drs. EKO SUPRAYITNO, MM',
                'nip' => '196709251993031004',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-10-2019)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 04-04-2022)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/sumarno.jpeg',
                'name' => 'Drs. SUMARNO, M.Si',
                'nip' => '196807041988031003',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2025)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 12-03-2018)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/harini.png',
                'name' => 'HARINI SETIJOWATI, SKM, M.HSc.',
                'nip' => '196811091993032005',
                'jabatan_singkat' => 'WIDYAISWARA AHLI UTAMA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 18-03-2019)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/diyah mubarokah.jpeg',
                'name' => 'DIYAH MUBAROKAH AKHADIYATI, S.Pi, M.Pi.',
                'nip' => '196901091997032002',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 06-11-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/sriyatun.jpg',
                'name' => 'SRIYATUN, S.Kep, MM.',
                'nip' => '196901121989032005',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 18-03-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/arif efendy.jpg',
                'name' => 'ARIF EFENDY, SH, MM.',
                'nip' => '196911021990031003',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MUDA',
                'rank' => 'Pembina (IV/a) (TMT 01-04-2016)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 01-04-2016)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/heru gunawan.jpg',
                'name' => 'Drs. HERU GUNAWAN, MM.',
                'nip' => '196911091990031006',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 20-08-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/sudalma.jpg',
                'name' => 'Dr. SUDALMA, S.SI, M.Si',
                'nip' => '197003021998031009',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 11-02-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/muhammad alaziz.png',
                'name' => 'MUHAMMAD ALAZIZ, SE, MM.',
                'nip' => '197003142005011008',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023))',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 15-01-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/agus pujianto.jpg',
                'name' => 'AGUS PUJIANTO, SH, MM',
                'nip' => '197008101994031004',
                'jabatan_singkat' => 'WIDYAISWARA AHLI PERTAMA',
                'rank' => 'Penata Tingkat I (III/d) (TMT 01-10-2015)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI PERTAMA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/agus andriyanto.jpeg',
                'name' => 'AGUS ANDRIYANTO, S.Sos, MM',
                'nip' => '197008241995031002',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 25-10-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/tri mardiyanti.jpg',
                'name' => 'TRI MARDIYANTI RATNASARI, SE, M.Acc',
                'nip' => '197103171997032005',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MUDA',
                'rank' => 'Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/kristina.jpg',
                'name' => 'KRISTIANA WIDIAWATI, SPi, MT',
                'nip' => '197112041999032007',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 04-04-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/santosa.jpeg',
                'name' => 'SANTOSA, S.Kep, MM',
                'nip' => '197212101992031004',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2022)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 13-02-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/pamungkas tunggul.jpeg',
                'name' => 'Drs. PAMUNGKAS TUNGGUL WASANA, M.Si',
                'nip' => '197301101992031001',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Utama Muda (IV/c) (TMT 01-04-2024)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 06-11-2020)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/erni irawati.jpeg',
                'name' => 'Dr. ERNI IRAWATI, SE, M.Pd',
                'nip' => '197308292009012002',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2024))',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 01-04-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/edi winarno.jpg',
                'name' => 'EDI WINARNO AS, ST, M.Kom',
                'nip' => '197502022005011004',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MUDA',
                'rank' => 'Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 05-01-201)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/andis triyanto.jpg',
                'name' => 'ANDIS TRIYANTO, S.KM, M.Kes',
                'nip' => '197505041999031006',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2025)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 16-06-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/nila agustina.jpg',
                'name' => 'Dra. NILA AGUSTINA, MPA.',
                'nip' => '197608171999032005',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 15-01-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/yuni indarti.jpg',
                'name' => 'YUNI INDARTI, S.SOS,MM',
                'nip' => '197906202009012003',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MUDA',
                'rank' => 'Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/muhammad rizal.jpeg',
                'name' => 'MUCHAMAD RIZAL, ST, M.Sc, M.Eng.',
                'nip' => '198008272005011010',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MUDA',
                'rank' => 'Pembina (IV/a) (TMT 01-10-2023)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MUDA (TMT 05-01-2017)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
            [
                'photo' => 'images/endang ria.jpg',
                'name' => 'Dr. ENDANG RIAGUSTRIANINGSIH,SIP, MPd',
                'nip' => '198208162010012020',
                'jabatan_singkat' => 'WIDYAISWARA AHLI MADYA',
                'rank' => 'Pembina Tingkat I (IV/b) (TMT 01-04-2025)',
                'jabatan_lengkap' => 'WIDYAISWARA AHLI MADYA (TMT 23-09-2021)',
                'penempatan' => 'BPSDMD Prov. Jateng',
            ],
        ];

        foreach ($profiles as $profile) {
            Widyaiswara::create([
                'nip' => trim($profile['nip']),
                'name' => trim($profile['name']),
                'photo' => $profile['photo'],
                'jabatan_singkat' => trim($profile['jabatan_singkat']),
                'jabatan_lengkap' => trim($profile['jabatan_lengkap']),
                'rank' => trim($profile['rank']),
                'penempatan' => trim($profile['penempatan']),
            ]);
        }
    }
}

