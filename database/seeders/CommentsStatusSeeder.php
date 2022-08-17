<?php

namespace Database\Seeders;

use App\Models\CommentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CommentStatus::create([
            'title' => 'comment 1 ',
            //'description' => ''
        ]);

        CommentStatus::create([
            'title' => 'comment 2',
            //'description' => ''

        ]);

        CommentStatus::create([
            'title' => 'comment 3',
            //'description' => ''
        ]);
    }
}
