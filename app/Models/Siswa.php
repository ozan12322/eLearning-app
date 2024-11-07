<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama_siswa',
        'email_siswa',
        'kelas_siswa',
        'foto_siswa',
    ];
}
