<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/keahlian', [HomeController::class, 'keahlian'])->name('keahlian');

Route::get('/proyek', [ProjectController::class, 'index'])->name('proyek.index');
Route::get('/proyek/{id}', [ProjectController::class, 'show'])->whereNumber('id')->name('proyek.show');