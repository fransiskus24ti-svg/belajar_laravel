<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);

Route::get('/mahasiswa/{Frans}',[MahasiswaController::class, 'show']);

Route::get('/pcr', function () {
    return 'pcr bbbbbb dah';
});

Route::get('/mahasiswa', function () {
    return 'hello mahasiswa';
});

Route::get('/nama/{frans}', function ($frans) {
    return'nama saya:'.$frans;
});

Route::get('/nim/{zian}', function ($frans='') {
    return'nim saya:'.$frans;
});

Route::get('/about', function () {
    return view('halaman-about');
});
