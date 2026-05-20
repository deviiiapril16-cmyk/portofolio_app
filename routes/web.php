<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/hubungi', function () {
    return view('hubungi');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::post('/simpan-pesan', [PesanController::class, 'simpan']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';