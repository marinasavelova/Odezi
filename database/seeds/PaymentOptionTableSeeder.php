<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\PaymentOption;

class PaymentOptionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('payment_options')->delete();
        
        for($i=1; $i<=6; $i++)
        {
            PaymentOption::create([
                'name' => 'Option ' . $i,
            ]);
        }
    }

}