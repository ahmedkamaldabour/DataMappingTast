<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MappingData>
 */
class MappingDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'main_data_id' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->text(50),
            'condition' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
