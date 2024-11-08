<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'role:admin')->group(function(){
    Route::get('/role', [UserController::class, 'role'])->name('admin.role');
    Route::get('/user-guru', [GuruController::class, 'guru'])->name('admin.user-guru');
    Route::post('/tambah-data-guru', [GuruController::class, 'tambahDataGuru'])->name('admin.tambah-data-guru');
    Route::get('/edit-guru{id}', [GuruController::class, 'editGuru'])->name('admin.edit-guru');
    Route::put('/update-guru{id}', [GuruController::class, 'updateGuru'])->name('admin.update-guru');
    Route::delete('/delete-guru{id}', [GuruController::class, 'deleteGuru'])->name('admin.delete-guru');

    Route::post('/tambah-user-guru', [UserController::class, 'tambahUserGuru'])->name('admin.tambah-user-guru');

    Route::get('/user-siswa', [SiswaController::class, 'siswa'])->name('admin.user-siswa');
    Route::post('/tambah-data-siswa', [SiswaController::class, 'tambahDataSiswa'])->name('admin.tambah-data-siswa');
    Route::get('/edit-siswa{id}', [SiswaController::class, 'editSiswa'])->name('admin.edit-siswa');
    Route::put('/update-siswa{id}', [SiswaController::class, 'updateSiswa'])->name('admin.update-siswa');
    Route::delete('/delete-siswa{id}', [SiswaController::class, 'deleteSiswa'])->name('admin.delete-siswa');

    Route::post('/tambah-user-siswa', [UserController::class, 'tambahUserSiswa'])->name('admin.tambah-user-siswa');
    Route::get('/kelas', [UserController::class, 'kelas'])->name('admin.kelas');
    Route::get('/mapel', [UserController::class, 'mapel'])->name('admin.mapel');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
