<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/hubungi', function () {
    return view('hubungi');
});
