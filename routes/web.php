<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);

Route::get('/mahasiswa/{Frans}',[MahasiswaController::class, 'show']);

Route::get('/pcr', function () {
<<<<<<< HEAD
    return 'pcr bbbbbbhhhh dah';
=======
    return 'pcr bbbbhhhbb dah';
>>>>>>> a9adf54f926f262a6cf07c316c49bb69aed6e9d2
});

Route::get('/mahasiswa', function () {
    return 'hello mahasiswa';
});

Route::get('/nama/{frans}', function ($frans) {
    return'nama saya:'.$frans;
});

Route::get('/nim/{frans}', function ($frans='') {
    return'nim saya:'.$frans;
});

Route::get('/about', function () {
    return view('halaman-about');
});
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

        Route::get('/home', [HomeController::class, 'index']);


