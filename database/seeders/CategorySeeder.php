<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Education', 'name' => 'Health', 'Leadership', 'Evangelism', 'Childcare', 'Women Empowerment'];
        foreach ($categories as $key => $category) {
            DB::table('categories')->insert(['name' => $category, 'slug' => str($category)->slug()]);
        }
    }
}
