<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nama_guru',
        'email_guru',
        'kelas_guru',
        'foto_guru',
    ];
}
