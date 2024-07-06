<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JatahCutiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [AdminController::class, 'index']);
Route::get('dashboard/divisi', [DivisiController::class, 'index']);
Route::get('dashboard/pegawai', [PegawaiController::class, 'index']);
Route::get('dashboard/jatahcuti', [JatahCutiController::class, 'index']);
Route::get('dashboard/pengajuan', [PengajuanController::class, 'index']);