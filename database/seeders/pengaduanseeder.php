<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class pengaduanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $status = ["0","proses", "selesai"]; 
        $masyarakat = DB::table('masyarakats')->first();
        $nik= DB::table('masyarakats')->where('nik', $masyarakat->nik)->first();

        DB::table('pengaduans')->insert([
            'id_pengaduan' => rand(1, 1000),
            'tanggal_pengaduan' => now(),
            'nik' =>  $nik->nik,
            'isi_laporan' => Str::random(255),
            'foto' => Str::random(255),
            'status' =>  $status[array_rand($status)],
         ]);
}
}