<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['cat_title' => 'Fiction'],
            ['cat_title' => 'Science'],
            ['cat_title' => 'History'],
            ['cat_title' => 'Technology'],
            ['cat_title' => 'Biography'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['cat_title' => $category['cat_title']], 
                $category
            );
        }
    }
}
