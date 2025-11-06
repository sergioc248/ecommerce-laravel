<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myCategory1 = new Category();
        $myCategory1->name = "Electronics";
        $myCategory1->save();
    
        $myCategory1 = new Category();
        $myCategory1->name = "Phones";
        $myCategory1->save();

        $myCategory1 = new Category();
        $myCategory1->name = "Computers";
        $myCategory1->save();

        Category::factory(20)->create();
    }
}
