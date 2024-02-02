<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class petugasseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       // $petugasIds = DB::table('petugas')->inRandomOrder()->value('id_petugas');
        //if ($petugasIds !== null) 
        $levels = ["admin", "petugas"]; 
        {
        DB::table('petugass')->insert([
            'id_petugas' => rand(1,1000),
            'nama_petugas' => Str::random(35),
            'username' => Str::random(25),
            'password' => Str::random(32),
            'telepon' => Str::random(13),
            'level' => $levels[array_rand($levels)],
         ]);
    } 

    }
    }
