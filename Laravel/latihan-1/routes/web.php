<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\Auth;

Route::get('/profile', function () {
    // Dummy data
    $username = 'ryhndes';
    $email = 'ryhndes2@coolperson.com';

    return view('profile', compact('username', 'email'));
})->middleware(Auth::class);

Route::get('/', function () {
    return view('welcome');
});

// Signin Routes
Route::get('/signin', function () {
    return view('signin');
});

Route::post('/signin', function () {
    return 'Proses Signin';
});

// Signup Routes
Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function () {
    return 'Proses Signup';
});

// Blog Routes
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/{blogId}', function ($blogId) {
    // Ambil query string 'title' dan 'content' (default jika tidak ada)
    $title = request()->query('title', 'Judul Default');
    $content = request()->query('content', 'Konten Default');

    // Kembalikan view dengan data
    return view('blog_detail', compact('blogId', 'title', 'content'));
});

// Category Routes
Route::get('/category/{slug}', function ($slug) {
    return "Artikel dalam kategori: {$slug}";
});

// Author Routes
Route::get('/author/{username}', function ($username) {
    return "Artikel oleh penulis: {$username}";
});

// Privacy Policy Route
Route::get('/privacy-policy', function () {
    return 'Halaman Kebijakan Privasi';
});

// Profile Route
// Route::get('/profile', function () {
//     $username = 'ryhndes';
//     $email = 'ryhndes@coolperson.com';
    
//     return view('profile', compact('username', 'email'));
// });