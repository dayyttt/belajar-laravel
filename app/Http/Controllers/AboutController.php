<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data['title'] = 'About';

        $data['milestones'] = [
            ['year' => '2024 Q1', 'label' => 'Didirikan',          'desc' => 'TokiToki resmi berdiri dengan misi memberdayakan jasa lokal.'],
            ['year' => '2024 Q2', 'label' => 'Produk Pertama',     'desc' => 'Peluncuran platform pertama dan onboarding mitra awal.'],
            ['year' => '2024 Q3', 'label' => '100 Mitra',          'desc' => 'Mencapai 100 mitra aktif di berbagai kategori layanan.'],
            ['year' => '2025',    'label' => 'Ekspansi Nasional',  'desc' => 'Memperluas jangkauan ke seluruh kota besar di Indonesia.'],
        ];

        $data['team'] = [
            ['initials' => 'AF', 'name' => 'Ahmad Fauzi',   'role' => 'Founder & CEO',       'bio' => 'Visioner di balik TokiToki. Ahmad memimpin dengan semangat untuk memberdayakan ekosistem jasa lokal Indonesia.',                                    'color' => 'from-green-500 to-emerald-600'],
            ['initials' => 'SR', 'name' => 'Siti Rahayu',   'role' => 'CTO',                 'bio' => 'Arsitek teknologi platform. Siti memastikan setiap fitur dibangun dengan standar teknis tertinggi dan skalabel.',                                   'color' => 'from-teal-500 to-green-600'],
            ['initials' => 'RP', 'name' => 'Rizky Pratama', 'role' => 'Head of Operations',  'bio' => 'Memastikan layanan berjalan sempurna. Rizky mengkoordinasikan seluruh operasional agar mitra dan pengguna puas.', 'color' => 'from-emerald-500 to-teal-600'],
        ];

        return view('about', $data);
    }
}
