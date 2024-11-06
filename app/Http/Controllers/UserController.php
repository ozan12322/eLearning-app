<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    function role(){
        $role = Role::all();
        return view('admin.role', compact('role'));
    }

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

        $guru = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $guru->assignRole('guru');

        return redirect()->route('admin.user-guru');
    }

    function siswa(){
        $siswa = User::get();
        return view('admin.user-siswa', compact('siswa'));
    }

    function tambahSiswa(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $siswa = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $siswa->assignRole('siswa');

        return redirect()->route('admin.user-guru');
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
