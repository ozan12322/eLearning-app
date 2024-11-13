<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    function tugas(){
        $tugas = Tugas::get();
        $mapel = Mapel::get();
        return view('edu.tugas', compact('tugas'), compact('mapel'));
    }

    function tambahTugas(Request $request){
        $request->validate([
            'nama_tugas' => 'required',
            'deskripsi_tugas' => 'required',
            'mapels_id' => 'required',
        ]);

        DB::table('tugas')->insert([
            'nama_tugas' => $request->nama_tugas,
            'deskripsi_tugas' => $request->deskripsi_tugas,
            'mapels_id' => $request->mapels_id,
        ]);

        return redirect()->route('edu.tugas');
    }
}
