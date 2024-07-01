<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = ['Education', 'Health', 'Leadership', 'Evangelism', 'Childcare', 'Women Empowerment'];

        foreach ($categories as $category){
            return [
                'name' => $category,
                'slug' => Str::slug($category),
            ];
        }
        
    }
}
