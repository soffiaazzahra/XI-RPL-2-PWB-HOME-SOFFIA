<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class tanggapanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $petugas = DB::table('petugass')->first();
        $pengaduan = DB::table('pengaduans')->first();
    
        DB::table('tanggapans')->insert([
            'id_tanggapan' => rand(1, 1000),
            'id_pengaduan' => $pengaduan->id_pengaduan, // Use the ID property
            'tanggal_tanggapan' => now(),
            'tanggapan' => Str::random(),
            'id_petugas' => $petugas->id_petugas, // Use the ID property
         ]);
}
}