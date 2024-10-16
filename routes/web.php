<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});


Route::get('/blog', function () {
    $articles = [
        [
            'title' => 'Project Saya',
            'date' => '1 September 2024',
            'content' => 'Cek Project saya di Github!',
            'link' => 'https://github.com/izzuddinafif',

        ],
        [
            'title' => 'Pengalaman Magang di PT. SINDIKA',
            'date' => '28 Juli 2024',
            'content' => 'Laporan akhir magang di PT. SINDIKA (Sinergi Dimensi Informatika).',
            'link' => 'https://drive.google.com/file/d/1DhFfEREJp5hA7NGS5iaNnI04oXFS7YJu/view?usp=sharing',
        ],
        [
            'title' => 'Artikel Tentang Pengalaman Student Exchange Saya',
            'date' => '12 Februari 2024',
            'content' => 'Cerita Seputar Pengalaman Saya selama menjalani Program IISMA 2023.',
            'link' => 'https://docs.google.com/document/d/1UC9cMxgzc-5WPHlEPIsIzpgisz6JE2gq/edit?usp=sharing&ouid=100732150720875491821&rtpof=true&sd=true',
        ],
    ];
    return view('blog', ['articles' => $articles]);
});

