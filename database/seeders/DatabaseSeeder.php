<?php

namespace Database\Seeders;
use App\Models\Skema;
use App\Models\Asesor;
use App\Models\UnitKompetensi;
use App\Models\Elemen;
use App\Models\Jadwal;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AsesorSeeder::class,
            ElemenSeeder::class,
            JadwalSeeder::class,
            KriteriaUnjukKerjaSeeder::class,
            SkemaSeeder::class,
            UnitKompetensiSeeder::class,
           
           
        ]);
    }
}
