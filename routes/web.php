<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MahasiswaController;

// route utama (halaman default)
Route::get('/', function () {
    return view('welcome');
});

// route sederhana yang mengembalikan string
Route::get('/hello', function () {
    return 'Hello Laravel!';
});

Route::get('/hello-controller', [HelloController::class, 'index']);

Route::resource('mahasiswa', MahasiswaController::class);