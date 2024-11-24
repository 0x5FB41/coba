<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;  // Menambahkan model Post

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/blog', function () {
    $posts = App\Models\Post::paginate(5); // Display 5 posts per page
    return view('blog', ['articles' => $posts]);
});

Route::get('/blog/{id}', function($id) {
    $post = Post::findOrFail($id); // Mengambil satu post berdasarkan ID
    return view('artikel', ['article' => $post]);
});
