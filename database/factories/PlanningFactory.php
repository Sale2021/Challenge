<?php

namespace Database\Factories;

use App\Enum\PlanningEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planning>
 */
class PlanningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => \rand(1, 10),
            'user_id' => \rand(1, 10),
            'type' => $this->faker->randomElement(['Consultations', 'Urgences', 'Examens', 'Suivi', 'Rééducations']),
            'debut' => $this->faker->dateTimeInInterval('0 years', '1 days'),
            'fin' => $this->faker->dateTimeInInterval('0 years', '1 days'),
            'etat' => $this->faker->randomElement(PlanningEnum::cases()),
        ];
    }
}
