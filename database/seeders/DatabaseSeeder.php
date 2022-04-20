<?php

namespace Database\Seeders;
<<<<<<< HEAD
use App\Models\Skema;
use App\Models\Asesor;
use App\Models\UnitKompetensi;
use App\Models\Elemen;
use App\Models\Jadwal;
=======
>>>>>>> 366552e766ca2a3f6840ad684260d207841d2208

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
<<<<<<< HEAD
        $this->call([
            AsesorSeeder::class,
            ElemenSeeder::class,
            JadwalSeeder::class,
            KriteriaUnjukKerjaSeeder::class,
            SkemaSeeder::class,
            UnitKompetensiSeeder::class,
           
           
        ]);
=======
>>>>>>> 366552e766ca2a3f6840ad684260d207841d2208
    }
}
