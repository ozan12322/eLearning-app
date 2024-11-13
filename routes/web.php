<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
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

    Route::get('/kelas', [KelasController::class, 'kelas'])->name('admin.kelas');
    Route::post('/tambah-kelas', [KelasController::class, 'tambahKelas'])->name('admin.tambah-kelas');
    Route::get('/edit-kelas{id}', [KelasController::class, 'editKelas'])->name('admin.edit-kelas');
    Route::put('/update-kelas{id}', [KelasController::class, 'updateKelas'])->name('admin.update-kelas');
    Route::delete('/delete-kelas{id}', [KelasController::class, 'deleteKelas'])->name('admin.delete-kelas');

    Route::get('/mapel', [MapelController::class, 'mapel'])->name('admin.mapel');
    Route::post('/tambah-mapel', [MapelController::class, 'tambahMapel'])->name('admin.tambah-mapel');
    Route::get('/edit-mapel{id}', [MapelController::class, 'editMapel'])->name('admin.edit-mapel');
    Route::put('/update-mapel{id}', [MapelController::class, 'updateMapel'])->name('admin.update-mapel');
    Route::delete('/delete-mapel{id}', [MapelController::class, 'deleteMapel'])->name('admin.delete-mapel');
});

Route::middleware('auth', 'role:guru|siswa')->group(function(){
    Route::get('/tugas', [TugasController::class, 'tugas'])->name('edu.tugas');

    Route::get('/exam', [ExamController::class, 'exam'])->name('edu.exam');
});

Route::middleware('auth', 'role:guru')->group(function(){
    Route::post('/tambah-tugas', [TugasController::class. 'tambahTugas'])->name('edu.tambah-tugas');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
