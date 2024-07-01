<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::get();
        
        $users = User::factory()->count(10)->create();
       

        $users->each( function($user) use ($categories) {
            Post::factory()
            ->count(5)
            ->for($user, 'author')
            ->hasAttached($categories->random(3), [], 'categories')
            ->create();
        });
    }
}
