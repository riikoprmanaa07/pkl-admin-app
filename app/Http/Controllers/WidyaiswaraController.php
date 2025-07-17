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
                'rank' => 'Pembina Utama Madya (IV/d)',
            ],
            [
                'photo' => 'https://placehold.co/128x128/343a40/FFFFFF?text=H',
                'name' => 'HENDRI SANTOSA, SE, Ak, M.Si. CA.',
                'nip' => '196112261983031001',
                'rank' => 'Pembina Utama Madya (IV/d)',
            ],
            [
                'photo' => 'https://placehold.co/128x128/6c757d/FFFFFF?text=S',
                'name' => 'Dr. Ir. SUPRIYANTO, M.Si.',
                'nip' => '196205171991031004',
                'rank' => '	Pembina Utama (IV/e)',
            ],
        ];
        // Mengembalikan view dengan data profil
        return view('ProfilWidyaiswara', ['profiles' => $profiles]);
    }
}
