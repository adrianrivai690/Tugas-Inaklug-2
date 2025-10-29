<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang');

Route::get('/layanan-kami', function () {
    return view('layanan-kami');
})->name('layanan');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

// Hubungi Kami Routes
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('hubungi');
Route::post('/hubungi-kami', [ContactController::class, 'store'])->name('contact.store');