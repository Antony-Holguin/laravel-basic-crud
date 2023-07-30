<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
                'email' => fake()->unique()->email(),
                'description' => fake()->text(20),
                'date_birth' => fake()->date(),
                'weight' => fake()->randomFloat(10),
                'scholarship' => fake()->randomDigit(),
                'status' => fake()->boolean(),
                'age' => fake()->numberBetween(18,40),
                
        ];
    }
}
