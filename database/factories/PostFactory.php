<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['draft', 'published', 'disabled']);

        return [
            'title' => fake()->sentence(),
            'slug' =>  str(fake()->unique()->sentence())->slug(),
            'body' => fake()->paragraph(10),
            'thumbnail' =>fake()->imageUrl(category:'posts'),
            'status' => $status,
            'published_at' => $status === 'published'? Carbon::now()->subDays(2): null,
        ];
    }
}
