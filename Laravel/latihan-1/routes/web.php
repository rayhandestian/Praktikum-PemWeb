<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Home Route (Why? I like the welcome page though)
// Route::get('/', function () {
//     return 'Welcome (halaman utama)';
// });

// Signin Routes
Route::get('/signin', function () {
    return 'Form Signin';
});

Route::post('/signin', function () {
    return 'Proses Signin';
});

// Signup Routes
Route::get('/signup', function () {
    return 'Form Signup';
});

Route::post('/signup', function () {
    return 'Proses Signup';
});

// Blog Routes
Route::get('/blog', function () {
    return 'Daftar Artikel Blog';
});

Route::get('/blog/{slug}', function ($slug) {
    return "Detail Artikel dengan slug: {$slug}";
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
