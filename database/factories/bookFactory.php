<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Titre' => $this->faker->sentence(10),
            'Numero_local' => random_int(1,10),
            'Numero_central' => random_int(1,10),
            'ISBN' => random_int(1,10),
            'category_id' => random_int(1,10),
            'auther_id' => random_int(1,10),
            'publisher_id' => random_int(1,10),
            'Nombre_de_page' => random_int(1,10),
            'status' => 'Y'
        ];
    }
}
