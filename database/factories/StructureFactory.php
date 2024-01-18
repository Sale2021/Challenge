<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Structure>
 */
class StructureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->company(),
            'type' => $this->faker->randomElement(['pharmacie', 'laboratoire', 'clinique']),
            'contact' => $this->faker->phoneNumber(),
            'quartier_id' => random_int(1, 5),
            'map' => $this->faker->latitude(12).','.$this->faker->longitude(-8),
            'horaire' => $this->faker->sentence(),
            'assurance' => $this->faker->sentence(1),
        ];
    }
}
