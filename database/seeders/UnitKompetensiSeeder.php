<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke tabel Skema
   
    DB::table('unit_kompetensis')->insert([
        [
            'kodeUnit'=> 'J.620100.004.02',
            'judulUnit' => 'Menggunakan Struktur Data',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Pemrograman Aplikasi Dasar',
        ],
        [
            'kodeUnit'=> 'J.620100.009.01',
            'judulUnit' => 'Menggunakan Spesifikasi Program',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Pemrograman Aplikasi Dasar',
        ],
        [
            'kodeUnit'=> 'J.61110000.003.02',
            'judulUnit' => 'Merancang Topologi Jaringan',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Jaringan Komputer',
        ],
        [
            'kodeUnit'=> 'J.61110000.004.01',
            'judulUnit' => 'Merancang Pengamatan Jaringan',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Jaringan Komputer',
        ],
        [
            'kodeUnit'=> 'LOG.OO 02.010.01',
            'judulUnit' => 'Mengoperasikan Komputer',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Pembuatan Gambar Dengan CAD 3D',
        ],
        [
            'kodeUnit'=> 'LOG.OO 09.002.01',
            'judulUnit' => 'Membaca Gambar Teknik',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Pembuatan Gambar Dengan CAD 3D',
        ],
        [
            'kodeUnit'=> 'LOG.OO 01.002.01',
            'judulUnit' => 'Menerapkan Prinsip-Prinsip Keselamatan dan Kesehatan Kerja Di Lingkungan Kerja',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Operasi Pengelasan Dasar',
        ],
        [
            'kodeUnit'=> 'LOG.OO 01.003.01',
            'judulUnit' => 'Menerapkan Prosedur-Prosedur Mutu',
            'jenisStandar' => 'SKKNI',
            'skema' => 'Operasi Pengelasan Dasar',
        ]

    ]);
    }
}
