<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

    Route::prefix('dashboard')->group(function(){
        Route::get('/', [AdminController::class, 'index']);
        
        Route::prefix('pegawai')->group(function(){

            //Pegawai
            Route::get('/', [PegawaiController::class, 'index']);
            Route::get('/create', [PegawaiController::class, 'create']);
            Route::post('/', [PegawaiController::class, 'store']);
            Route::get('/{nip}', [PegawaiController::class, 'show'])->name('pegawai.show');
            Route::get('/edit/{nip}', [PegawaiController::class, 'edit']);
            Route::put('/update/{nip}', [PegawaiController::class, 'update']);
            Route::delete('/destroy/{id}', [PegawaiController::class, 'destroy']);
        });
        Route::prefix('pengajuan_cuti')->group(function(){

            //Pengajuan Cuti
            Route::get('/', [PengajuaCutiController::class, 'index']);
            Route::get('/create', [PengajuaCutiController::class, 'create']);
            Route::post('/', [PengajuaCutiController::class, 'store']);
            Route::get('/{id}', [PengajuaCutiController::class, 'show'])->name('pengajuan_cuti.show');
            Route::get('/edit/{id}', [PengajuaCutiController::class, 'edit']);
            Route::put('/update/{id}', [PengajuaCutiController::class, 'update']);
            Route::delete('/destroy/{id}', [PengajuaCutiController::class, 'destroy']);
        });
        Route::middleware('admin')->prefix('divisi')->group(function(){

            //Divisi
            Route::get('/', [DivisiController::class, 'index']);
            Route::get('/create', [DivisiController::class, 'create']);
            Route::post('/', [DivisiController::class, 'store']);
            Route::get('/{id}', [DivisiController::class, 'show'])->name('divisi.show');
            Route::get('/edit/{id}', [DivisiController::class, 'edit']);
            Route::put('/update/{id}', [DivisiController::class, 'update']);
            Route::delete('/destroy/{id}', [DivisiController::class, 'destroy']);
        });
        Route::middleware('admin')->prefix('jatah_cuti')->group(function(){

            //Jatah Cuti
            Route::get('/', [JatahCutiController::class, 'index']);
            Route::get('/create', [JatahCutiController::class, 'create']);
            Route::post('/', [JatahCutiController::class, 'store']);
            Route::get('/{id}', [JatahCutiController::class, 'show'])->name('jatah_cuti.show');
            Route::get('/edit/{id}', [JatahCutiController::class, 'edit']);
            Route::put('/update/{id}', [JatahCutiController::class, 'update']);
            Route::delete('/destroy/{id}', [JatahCutiController::class, 'destroy']);
        });
    });

});

require __DIR__.'/auth.php';



