<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MatchingData>
 */
class MatchingDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'arabic_description' =>$this->faker->text,
            'english_description' => $this->faker->text,
            'latin_description' => $this->faker->text,
        ];
    }
}
