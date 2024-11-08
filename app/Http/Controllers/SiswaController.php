<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    function siswa(){
        $siswa = Siswa::get();
        return view('admin.user-siswa', compact('siswa'));
    }

    function tambahDataSiswa(Request $request){
        $request->validate([
            'nama_siswa' => 'required',
            'email_siswa' => 'required|email',
            'kelas_siswa' => 'required',
            'foto_siswa' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if(!empty($request->foto_siswa)){
            $fileName = 'foto_siswa-'.uniqid().'.'.$request->foto_siswa->extension();
            $request->foto->move(public_path('img/siswa'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        DB::table('siswas')->insert([
            'nama_siswa' => $request->nama_siswa,
            'email_siswa' => $request->email_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'foto_siswa' => $fileName,
        ]);

        return redirect()->route('admin.tambah-user-siswa');
    }

    function editSiswa(Siswa $id){
        return view('admin.edit-siswa', compact('id'));
    }

    function updateSiswa(Request $request, string $id){
        $request->validate([
            'nama_siswa' => 'required',
            'email_siswa' => 'required|email',
            'kelas_siswa' => 'required',
            'foto_siswa' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoLama = DB::table('siswas')->select('foto_siswa')->where('id', $id)->get();
        foreach($fotoLama as $f1){
            $fotoLama = $f1->foto_siswa;
        }

        if(!empty($request->foto_siswa)){
            if(!empty($fotoLama->foto_siswa)) unlink(public_path('img/siswa'.$fotoLama->foto_siswa));

            $fileName = 'foto_siswa-'.$request->id.'.'.$request->foto_siswa->extension();

            $request->foto_siswa->move(public_path('img/siswa'), $fileName);
        } else {
            $fileName = $fotoLama;
        }

        DB::table('siswas')->where('id', $id)->update([
            'nama_siswa' => $request->nama_siswa,
            'email_siswa' => $request->email_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'foto_siswa' => $fileName,
        ]);

        return redirect()->route('admin.user-siswa');
    }

    function deleteSiswa(Siswa $id){
        $id->delete();

        return redirect()->route('admin.user-siswa');
    }
}
