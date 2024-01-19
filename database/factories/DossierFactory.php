<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dossier>
 */
class DossierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => \rand(1, 15),
            'poids' => \rand(20, 90),
            'tension' => \rand(20, 90),
            'frequence' => \rand(20, 90),
            'temperature' => \rand(20, 90),
            'taille' => $this->faker->randomFloat(2, 1),
            'tuteur' => $this->faker->phoneNumber(),
            'allergie' => $this->faker->sentence(),
        ];
    }
}
