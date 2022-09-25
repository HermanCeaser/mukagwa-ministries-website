<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = ['Education', 'Health', 'Leadership', 'Evangelism', 'Childcare', 'Women Empowerment'];

        return [
            'title' => fake()->unique()->randomElement($categories),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(5),
            'location' => fake()->address(),
            'user_id' => User::factory()->create(),

        ];
    }
}
