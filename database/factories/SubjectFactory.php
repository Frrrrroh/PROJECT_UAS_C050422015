<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $counter = 1;

        return [
            'title' => fake()->word(),
            'lecturer_id' => $counter++,
            'semester' => 'Ganjil',
            'academic_year' => "2024/2025",
            'sks' => 3,
            'code' => fake()->bothify('??###'),
            'description' => fake()->text(),

        ];
    }
}
