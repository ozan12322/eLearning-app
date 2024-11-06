<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function guru(){
        $guru = User::get();
        return view('admin.user-guru', compact('guru'));
    }

    function tambahGuru(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->Hash::make($request->password),
        ]);

        return redirect()->route('admin.user-guru');
    }

    function siswa(){
        $siswa = User::get();
        return view('admin.user-siswa', compact('siswa'));
    }
    
    function kelas(){
        $kelas = Kelas::get();
        return view('admin.kelas', compact('kelas'));
    }
    
    function mapel(){
        $mapel = Mapel::get();
        return view('admin.mapel', compact('mapel'));
    }
}
