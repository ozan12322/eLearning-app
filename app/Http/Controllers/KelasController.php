<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    function kelas(){
        $kelas = Kelas::get();
        return view('admin.kelas', compact('kelas'));
    }
}
