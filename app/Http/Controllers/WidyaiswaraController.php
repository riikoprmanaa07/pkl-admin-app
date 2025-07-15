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
                'photo' => 'https://placehold.co/128x128/0056b3/FFFFFF?text=A',
                'name' => '	Dra. MUKAROMAH SYAKOER, M.M.',
                'nip' => '196102171985032008',
                'rank' => 'Pembina Utama Madya (IV/d)',
                'specializations' => ['Kepemimpinan', 'Manajemen Strategis']
            ],
            [
                'photo' => 'https://placehold.co/128x128/343a40/FFFFFF?text=B',
                'name' => 'Prof. Dr. Budi Santoso, M.Pd.',
                'nip' => '196802201992031002',
                'rank' => 'Pembina Utama Madya (IV/d)',
                'specializations' => ['Kebijakan Publik', 'Analisis Data']
            ],
            [
                'photo' => 'https://placehold.co/128x128/6c757d/FFFFFF?text=C',
                'name' => 'Ir. Citra Dewi, M.T.',
                'nip' => '197205101996032001',
                'rank' => 'Pembina Utama Muda (IV/c)',
                'specializations' => ['Teknologi Informasi', 'E-Government']
            ],
        ];
        // Mengembalikan view dengan data profil
        return view('ProfilWidyaiswara', ['profiles' => $profiles]);
    }
}
