<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    function mapel(){
        $mapel = Mapel::get();
        return view('admin.mapel', compact('mapel'));
    }

    function tambahMapel(Request $request){
        $request->validate([
            'nama_mapel' => 'required',
            'slug' => 'required',
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => $request->nama_mapel,
            'slug' => $request->slug,
        ]);

        return redirect()->route('admin.mapel');
    }

    function editMapel(Mapel $id){
        return view('admin.edit-mapel', compact('id'));
    }

    function updateMapel(Request $request, string $id){
        $request->validate([
            'nama_mapel' => 'required',
            'slug' => 'required',
        ]);

        DB::table('mapels')->where('id', $id)->update([
            'nama_mapel' => $request->nama_mapel,
            'slug' => $request->slug,
        ]);

        return redirect()->route('admin.mapel');
    }

    function deleteMapel(Mapel $id){
        $id->delete();

        return redirect()->route('admin.mapel');
    }
}
