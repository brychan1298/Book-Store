<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "category" => "Fiction"
        ]);

        Category::create([
            "category" => "Adventure"
        ]);

        Category::create([
            "category" => "Horror"
        ]);

        Category::create([
            "category" => "Jungle"
        ]);
    }
}
