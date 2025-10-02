<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myBrand1 = new Brand();
        $myBrand1->name = "Electronics";
        $myBrand1->save();
    
        $myBrand1 = new Brand();
        $myBrand1->name = "Phones";
        $myBrand1->save();

        $myBrand1 = new Brand();
        $myBrand1->name = "Computers";
        $myBrand1->save();

        Brand::factory(1000)->create();
    }
}
