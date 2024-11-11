<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ensure there are users to reference
        $user = User::first() ?? User::factory()->create(['name' => 'Afif']); // Create a user if none exists

        // Now create posts with the correct author_id
        Post::create([
            'title' => 'Project Saya',
            'author_id' => $user->id,  // Reference to a User ID
            'date' => '2024-09-01',
            'content' => 'Cek Project saya di Github!',
            'link' => 'https://github.com/izzuddinafif',
        ]);

        Post::create([
            'title' => 'Pengalaman Magang di PT. SINDIKA',
            'author_id' => $user->id,  // Reference to a User ID
            'date' => '2024-07-28',
            'content' => 'Laporan akhir magang di PT. SINDIKA (Sinergi Dimensi Informatika).',
            'link' => 'https://drive.google.com/file/d/1DhFfEREJp5hA7NGS5iaNnI04oXFS7YJu/view?usp=sharing',
        ]);

        Post::create([
            'title' => 'Artikel Tentang Pengalaman Student Exchange Saya',
            'author_id' => $user->id,  // Reference to a User ID
            'date' => '2024-02-12',
            'content' => 'Cerita Seputar Pengalaman Saya selama menjalani Program IISMA 2023.',
            'link' => 'https://docs.google.com/document/d/1UC9cMxgzc-5WPHlEPIsIzpgisz6JE2gq/edit?usp=sharing&ouid=100732150720875491821&rtpof=true&sd=true',
        ]);
    }
}
