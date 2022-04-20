<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaSkema'=>$this->faker->paragraph(mt_rand(2,5)),
            'kodeSkema'=>$this->faker->paragraph(mt_rand(2,5)),
            'status'=>$this->faker->paragraph(mt_rand(2,5)),
        ];
    }
}
