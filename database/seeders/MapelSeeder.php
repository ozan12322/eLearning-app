<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapels')->insert([
           'nama_mapel' => 'Matematika',
           'slug' => 'Matematika',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(), 
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'IPA',
            'slug' => 'IPA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), 
         ]);

         DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Indonesia',
            'slug' => 'Bahasa Indonesia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), 
         ]);

         DB::table('mapels')->insert([
            'nama_mapel' => 'Bahasa Inggris',
            'slug' => 'Bahasa Inggris',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), 
         ]);         
         
    }
}
