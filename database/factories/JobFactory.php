<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
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
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'location' => $this->faker->randomElement(['Remote', 'Hybrid', 'On Site']),
            'url' => $this->faker->url(),
            'schedule' => $this->faker->randomElement(['Full Time', 'Part Time']),
            'featured' => $this->faker->boolean(),
        ];
    }
}
