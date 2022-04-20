<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    // insert data ke tabel Skema
    {
        DB::table('asesors')->insert([
        [
            'namaLengkap' => 'Adi Suheryadi',
            'noRegistrasi' => 'MET.000.0071672018',
            'alamat' => 'Cirebon', 
            'noHp' => '123455', 
            'email' => 'adipolindra@gmail.com',
            'password' => '123455',
            // 'foto'=>'asesor1.jpg',
        ],
        [
            'namaLengkap' => 'A Sumarudin',
            'noRegistrasi' => 'MET.000.0004272014',
            'alamat' => 'Indramayu', 
            'noHp' => '123455', 
            'email' => 'asumarudin@gmail.com',
            'password' => '123455',
             // 'foto'=>'asesor1.jpg',
        ],
        [
            'namaLengkap' => 'Agus Sifa',
            'noRegistrasi' => 'MET.000.0031992014',
            'alamat' => 'Indramayu', 
            'noHp' => '123455', 
            'email' => 'asumarudin@gmail.com',
            'password' => '123455',
             // 'foto'=>'asesor1.jpg',
        ],
        [
            'namaLengkap' => 'Ahmad Lubis Ghozali',
            'noRegistrasi' => 'MET.000.0121152016',
            'alamat' => 'Indramayu', 
            'noHp' => '123455', 
            'email' => 'asumarudin@gmail.com',
            'password' => '123455',
             // 'foto'=>'asesor1.jpg',
        ],
        [
            'namaLengkap' => 'Badruzzaman',
            'noRegistrasi' => 'MET.000.0018822015',
            'alamat' => 'Indramayu', 
            'noHp' => '123455', 
            'email' => 'badruzzaman@gmail.com',
            'password' => '123455',
             // 'foto'=>'asesor1.jpg',
        ],
        [
            'namaLengkap' => 'Darsih',
            'noRegistrasi' => 'MET.000.0121162016',
            'alamat' => 'Indramayu', 
            'noHp' => '123455', 
            'email' => 'darsih@gmail.com',
            'password' => '123455',
             // 'foto'=>'asesor1.jpg',
        ],
        ]);
    }
}
