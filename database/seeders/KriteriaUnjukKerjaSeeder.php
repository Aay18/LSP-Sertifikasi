<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaUnjukKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria_unjuk_kerjas')->insert([
            [
                'namaElemen' => 'Mengidentifikasi konsep data dan struktur data', 
                'kriteriaUnjukKerja'=>'Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.',
                
            ],
            [
                'namaElemen' => 'Mengidentifikasi konsep data dan struktur data', 
                'kriteriaUnjukKerja'=>'Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.',
                
            ],
        ]);
    }
}
