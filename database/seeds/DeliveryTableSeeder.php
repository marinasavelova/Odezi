<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Delivery;

class DeliveryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('deliveries')->delete();
        
        for($i=1; $i<=10; $i++)
        {
            Delivery::create([
                'name' => 'Delivery term ' . $i,
            ]);
        }
    }

}