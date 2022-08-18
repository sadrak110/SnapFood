<?php

namespace Database\Seeders;

use App\Models\FoodCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        FoodCategory::create([
            'category_name' => 'Pizza',
            'category_description' => 'Pizza  '
        ]);

        FoodCategory::create([
            'category_name' => 'Burger',
            'category_description' => 'hamburger '

        ]);

        FoodCategory::create([
            'category_name' => 'Pasta',
            'category_description' => 'Pasta '
        ]);

        FoodCategory::create([
            'category_name' => 'Soup',
            'category_description' => 'soup']);
    }
}
