<?php

namespace Database\Seeders;

use App\Models\RestaurantCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        RestaurantCategory::create([
            'category_name' => 'drinks',
            'category_description' => 'lorem ipsum .....................................................................',    
        ]);

        RestaurantCategory::create([
            'category_name' => 'chinese',
            'category_description' => "chines food lorem ............................................."

        ]);

        RestaurantCategory::create([
            'category_name' => 'Iranian',
            'category_description' => ' traditional food of Iran'
        ]);

        RestaurantCategory::create([
            'category_name' => 'Cafe',
            'category_description' => "cafe   ......................................................."
        ]);
    }
}
