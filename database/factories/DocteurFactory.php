<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docteur>
 */
class DocteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'prenom' => $this->faker->firstName(),
            'nom' => $this->faker->lastName(),
            'contact' => $this->faker->phoneNumber(),
            'specialite' => $this->faker->randomElement(['Rhumatologie', 'Endocrinologie', 'Urologie', 'Radiologie', 'Psychiatrie', 'Ophtalmologie', 'Gynécologie et obstétrique', 'Pédiatrie', 'Neurologie']),
        ];
    }
}
