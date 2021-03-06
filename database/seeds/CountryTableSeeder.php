<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Country;

class CountryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('countries')->delete();
        
        for($i=1; $i<=15; $i++)
        {
            Country::create([
                'name' => 'Country ' . $i,
            ]);
        }
    }

}