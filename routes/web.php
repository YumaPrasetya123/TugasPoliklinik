<?php

use App\Http\Controllers\Admin\DaftarpoliController;
use App\Http\Controllers\Admin\DokterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\PoliController;
use App\Http\Controllers\Dokter\HomeDokterController;
use App\Http\Controllers\User\HomeUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

    //Data - Pasien
    Route::get('/data-pasien', [PasienController::class, 'index'])->name('data.pasien');
    Route::get('/data-pasien/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/data-pasien/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/data-pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/data-pasien/{id}', [PasienController::class, 'update'])->name('pasien.update');
    Route::delete('/data-pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');

    //Data - Dokter
    Route::get('/data-dokter', [DokterController::class, 'index'])->name('data.dokter');
    Route::get('/data-dokter/create', [DokterController::class, 'create'])->name('dokter.create');
    Route::post('/data-dokter/store', [DokterController::class, 'store'])->name('dokter.store');
    Route::get('/data-dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
    Route::put('/data-dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
    Route::delete('/data-dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');

    //Data Poliklinik
    Route::get('/poliklinik', [PoliController::class, 'index'])->name('poliklinik');
    Route::get('/poliklinik/create', [PoliController::class, 'create'])->name('poli.create');
    Route::post('/poliklinik/store', [PoliController::class, 'store'])->name('poli.store');
    Route::get('/poliklinik/{id}/edit', [PoliController::class, 'edit'])->name('poli.edit');
    Route::put('/poliklinik/{id}', [PoliController::class, 'update'])->name('poli.update');
    Route::delete('/poliklinik/{id}', [PoliController::class, 'destroy'])->name('poli.destroy');

    //Data - Obat
    Route::get('/data-obat', [ObatController::class, 'index'])->name('data.obat');
    Route::get('/data-obat/create', [ObatController::class, 'create'])->name('obat.create');
    Route::post('/data-obat/store', [ObatController::class, 'store'])->name('obat.store');
    Route::get('/data-obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
    Route::put('/data-obat/{id}', [ObatController::class, 'update'])->name('obat.update');
    Route::delete('/data-obat/{id}', [ObatController::class, 'destroy'])->name('obat.delete');

    //Daftar Poli
    Route::get('/daftar-poli', [DaftarpoliController::class, 'index'])->name('daftar.poli');

    //Dashboard Pasien
    Route::get('/dashboard/pasien', [HomeUserController::class, 'index'])->name('pasien.dashboard');

    //Dashboard Dokter
    Route::get('/dashboard/dokter', [HomeDokterController::class, 'index'])->name('dokter.dashboard');
});
