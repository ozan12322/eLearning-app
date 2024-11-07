<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    function guru(){
        $guru = Guru::get();
        return view('admin.user-guru', compact('guru'));
    }

    function tambahDataGuru(Request $request){
        $request->validate([
            'nama_guru' => 'required',
            'email_guru' => 'required|email',
            'kelas_guru' => 'required',
            'foto_guru' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if(!empty($request->foto_guru)){
            $fileName = 'foto_guru-'.uniqid().'.'.$request->foto_guru->extension();
            $request->foto->move(public_path('img/guru'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        DB::table('gurus')->insert([
            'nama_guru' => $request->nama_guru,
            'email_guru' => $request->email_guru,
            'kelas_guru' => $request->kelas_guru,
            'foto_guru' => $fileName,
        ]);

        return redirect()->route('admin.user-guru');
    }

    function editGuru(Guru $id){
        return view('admin.edit-guru', compact('id'));
    }

    function updateGuru(Request $request, string $id){
        $request->validate([
            'nama_guru' => 'required',
            'email_guru' => 'required|email',
            'kelas_guru' => 'required',
            'foto_guru' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoLama = DB::table('gurus')->select('foto_guru')->where('id', $id)->get();
        foreach($fotoLama as $f1){
            $fotoLama = $f1->foto_guru;
        }

        if(!empty($request->foto_guru)){
            if(!empty($fotoLama->foto_guru)) unlink(public_path('img/guru'.$fotoLama->foto_guru));

            $fileName = 'foto_guru-'.$request->id.'.'.$request->foto_guru->extension();

            $request->foto_guru->move(public_path('img/guru'), $fileName);
        } else {
            $fileName = $fotoLama;
        }

        DB::table('gurus')->where('id', $id)->update([
            'nama_guru' => $request->nama_guru,
            'email_guru' => $request->email_guru,
            'kelas_guru' => $request->kelas_guru,
            'foto_guru' => $fileName,
        ]);

        return redirect()->route('admin.user-guru');
    }

    function deleteGuru(Guru $id){
        $id->delete();

        return redirect()->route('admin.user-guru');
    }
}
