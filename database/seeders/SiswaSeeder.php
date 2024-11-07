<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nama_siswa' => 'Dery A',
            'email_siswa' => 'dery123@gmail.com',
            'kelas_siswa' => '4',
        ]);
        Siswa::create([
            'nama_siswa' => 'Alinka',
            'email_siswa' => 'alinka123@gmail.com',
            'kelas_siswa' => '5',
        ]);
        Siswa::create([
            'nama_siswa' => 'Bambang',
            'email_siswa' => 'bambang123@gmail.com',
            'kelas_siswa' => '6',
        ]);
    }
}
