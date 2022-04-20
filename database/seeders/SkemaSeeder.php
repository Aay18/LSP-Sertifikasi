<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    // insert data ke tabel Skema
    {
        DB::table('skemas')->insert([
            [
                'namaSkema' => 'Jaringan Komputer',
                'kodeSkema' => 'SKM/1528/00010/3/2019/6',
                'status' => 'Aktif', 
            ],
            [
                'namaSkema' => 'Pembuatan Gambar Dengan CAD 3D ',
                'kodeSkema' => 'SKM/1528/00010/3/2019/6',
                'status' => 'Aktif',
            ],
            [
                'namaSkema' => 'Operasi Pengelasan Dasar',
                'kodeSkema' => 'SKM/1528/00010/3/2019/6',
                'status' => 'Aktif', 
            ]
        ]);
    }
}
