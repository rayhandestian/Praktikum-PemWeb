<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Signin Routes
Route::get('/signin', [UserController::class, 'showSigninForm'])->name('signin.form');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');

// Route 'login' yang mengarah ke /signin
Route::get('/login', [UserController::class, 'showSigninForm'])->name('login');
Route::post('/login', [UserController::class, 'signin'])->name('login.submit');

// Signup Routes
Route::get('/signup', [UserController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

// Logout Route
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Profile Route dengan Middleware Auth
Route::get('/profile', [UserController::class, 'profile'])->middleware(Auth::class);

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