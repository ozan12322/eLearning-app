<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nama_guru' => 'Jason M',
            'email_guru' => 'jason123@gmail.com',
            'kelas_guru' => '4',
        ]);
        Guru::create([
            'nama_guru' => 'Tatang S',
            'email_guru' => 'tatang123@gmail.com',
            'kelas_guru' => '5',
        ]);
        Guru::create([
            'nama_guru' => 'Sinta P',
            'email_guru' => 'sinta123@gmail.com',
            'kelas_guru' => '6',
        ]);
    }
}
