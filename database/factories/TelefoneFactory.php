<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models Telefone>
 */
class TelefoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'city' => $this->faker->city(),
            //'street' => $this->faker->streetName(),
            'numero_telefone' => $this->faker->e164PhoneNumber(),
            //'zip_code' => $this->faker->postcode()
            //
        ];
    }

    /**
     * 'person_id',
      *  'city',
      *  'street',
       * 'number',
        *'zip_code'
     */
}
