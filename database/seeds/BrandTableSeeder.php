<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Brand;

class BrandTableSeeder extends Seeder {

    public function run()
    {
        DB::table('brands')->delete();
        
        for($i=1; $i<=10; $i++)
        {
            Brand::create([
                'name' => 'Brand ' . $i,
            ]);
        }
    }

}