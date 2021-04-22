<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $category = new  Category();
       $category->name = 'CA-1';
       $category->save();

        $category = new  Category();
        $category->name = 'CA-2';
        $category->save();

        $category = new  Category();
        $category->name = 'CA-3';
        $category->save();

    }
}
