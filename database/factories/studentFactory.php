<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender=['male','female'];
        return [
            'Name' => $this->faker->sentence,
            'Numero_CIN' => random_int(1,10),
            'Numero_abonné' => random_int(1,20),
            'Gender' => $gender[random_int(0,1)],
            'Email' => $this->faker->safeEmail,
            'Phone' => random_int(1,20),
            'Address' => $this->faker->address,
            'Date_de_naissance' => $this->faker->date,
            'Fonction' => $this->faker->sentence(20)
        ];
    }
}
