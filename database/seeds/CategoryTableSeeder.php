<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Category;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();
        
        for($i=1; $i<=10; $i++)
        {
            $category = Category::create([
                'name' => 'Category ' . $i,
                'parent_id' => null,
            ]);
            for($j=1; $j<=5; $j++)
            {
                Category::create([
                    'name' => 'Subcategory ' . $i . ' - ' . $j,
                    'parent_id' => $category->id,
                ]);
            }
        }
    }

}