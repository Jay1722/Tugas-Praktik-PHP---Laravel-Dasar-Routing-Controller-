<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;

// route utama (halaman default)
Route::get('/', function () {
    return view('welcome');
});

// route sederhana yang mengembalikan string
Route::get('/hello', function () {
    return 'Hello Laravel!';
});

Route::get('/hello-controller', [HelloController::class, 'index']);

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);