<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tagsNames = [
            'Backend',
            'Frontend',
            'API',
            'Software Engineer',
            'DevOps',
            'AI',
            'PHP',
            'DB Analyst',
            'HTML',
            'Laravel',
            'Javascript'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($tagsNames),
        ];
    }
}
