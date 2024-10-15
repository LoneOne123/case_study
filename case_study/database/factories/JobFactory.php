<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'user_id' => 1,
            'company_id' => 1,
            'category_id' => 1,
            'description' => fake()->paragraph(10),
            'salary' => fake()->randomFloat(2, 500, 10000),
        ];
    }
}
