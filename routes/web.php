<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

// Route utama, tampilkan halaman beranda untuk "/"
Route::get('/', function () {
    return view('welcome');
});

// Route genre dan authors (biarkan seperti sebelumnya)
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);
