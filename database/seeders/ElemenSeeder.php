<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    // insert data ke tabel Skema
    {
        DB::table('elemens')->insert([
            [
                'namaElemen' => 'Mengidentifikasi Konsep Data dan Struktur Data',
            ],
            [
                'namaElemen' => 'Menerapkan Struktur Data dan Akses Terhadap Struktur Data Tersebut', 
            ]
            
        ]);

       
    }
}
