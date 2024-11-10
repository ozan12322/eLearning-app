<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'nama_exam',
        'isi_exam',
        'jawab_exam',
        'kunci_exam',
    ];
}
