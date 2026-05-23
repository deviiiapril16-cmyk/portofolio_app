<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::post('/simpan-pesan', [PesanController::class, 'simpan']);

Route::get('/data_pesan', [PesanController::class, 'tampil']);

Route::get('/hapus-pesan/{id}', [PesanController::class, 'hapus']);

Route::get('/edit-pesan/{id}', [PesanController::class, 'edit']);

Route::post('/update_pesan/{id}', [PesanController::class, 'update']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';