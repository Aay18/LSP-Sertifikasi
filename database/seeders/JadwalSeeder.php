<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    // insert data ke tabel Skema
    {
        DB::table('jadwals')->insert([
            [
                'skema' => 'Pemrograman Aplikasi Dasar', 
                'tanggalMulai' => '2022-04-15', 
                'tanggalAkhir' => '2022-04-22', 
            ],
            [
                'skema' => 'Jaringan Komputer', 
                'tanggalMulai' => '2022-04-15', 
                'tanggalAkhir' => '2022-04-22', 
            ],
            
        ]);

       
    }
}
