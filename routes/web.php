<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa-create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa-create',[MahasiswaController::class,'store'])->name('mahasiswa.save');
