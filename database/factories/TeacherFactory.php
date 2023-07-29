<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'identification_number' => fake()->unique()->numerify('##########'),
                'names' => fake()->lastName(),
                'lastname' => fake()->firstName(),
                'age' => fake()->numberBetween(18,40),
        ];
    }
}
