<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'role:admin')->group(function(){
    Route::get('/user-guru', [UserController::class, 'guru'])->name('admin.user-guru');
    Route::post('/tambah-guru', [UserController::class, 'tambahGuru'])->name('admin.tambah-guru');
    Route::get('/user-siswa', [UserController::class, 'siswa'])->name('admin.user-siswa');
    Route::post('/tambah-siswa', [UserController::class, 'tambahSiswa'])->name('admin.tambah-siswa');
    Route::get('/kelas', [UserController::class, 'kelas'])->name('admin.kelas');
    Route::get('/mapel', [UserController::class, 'mapel'])->name('admin.mapel');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
