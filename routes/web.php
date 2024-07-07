<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuaCutiController;
use App\Http\Controllers\JatahCutiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Pegawai
Route::get('/dashboard/pegawai', [PegawaiController::class, 'index']);
Route::get('/dashboard/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/dashboard/pegawai', [PegawaiController::class, 'store']);
Route::get('/dashboard/pegawai/{nip}', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::get('/dashboard/pegawai/edit/{nip}', [PegawaiController::class, 'edit']);
Route::put('/dashboard/pegawai/update/{nip}', [PegawaiController::class, 'update']);
Route::delete('/dashboard/pegawai/destroy/{id}', [PegawaiController::class, 'destroy']);



//Divisi
Route::get('/dashboard/divisi', [DivisiController::class, 'index']);
Route::get('/dashboard/divisi/create', [DivisiController::class, 'create']);
Route::post('/dashboard/divisi', [DivisiController::class, 'store']);
Route::get('/dashboard/divisi/{id}', [DivisiController::class, 'show'])->name('divisi.show');
Route::get('/dashboard/divisi/edit/{id}', [DivisiController::class, 'edit']);
Route::put('/dashboard/divisi/update/{id}', [DivisiController::class, 'update']);
Route::delete('/dashboard/divisi/destroy/{id}', [DivisiController::class, 'destroy']);

//Pengajuan Cuti
Route::get('/dashboard/pengajuan_cuti', [PengajuaCutiController::class, 'index']);
Route::get('/dashboard/pengajuan_cuti/create', [PengajuaCutiController::class, 'create']);
Route::post('/dashboard/pengajuan_cuti', [PengajuaCutiController::class, 'store']);
Route::get('/dashboard/pengajuan_cuti/{id}', [PengajuaCutiController::class, 'show'])->name('pengajuan_cuti.show');
Route::get('/dashboard/pengajuan_cuti/edit/{id}', [PengajuaCutiController::class, 'edit']);
Route::put('/dashboard/pengajuan_cuti/update/{id}', [PengajuaCutiController::class, 'update']);
Route::delete('/dashboard/pengajuan_cuti/destroy/{id}', [PengajuaCutiController::class, 'destroy']);

//Jatah Cuti
Route::get('/dashboard/jatah_cuti', [JatahCutiController::class, 'index']);
Route::get('/dashboard/jatah_cuti/create', [JatahCutiController::class, 'create']);
Route::post('/dashboard/jatah_cuti', [JatahCutiController::class, 'store']);
Route::get('/dashboard/jatah_cuti/{id}', [JatahCutiController::class, 'show'])->name('jatah_cuti.show');
Route::get('/dashboard/jatah_cuti/edit/{id}', [JatahCutiController::class, 'edit']);
Route::put('/dashboard/jatah_cuti/update/{id}', [JatahCutiController::class, 'update']);
Route::delete('/dashboard/jatah_cuti/destroy/{id}', [JatahCutiController::class, 'destroy']);
