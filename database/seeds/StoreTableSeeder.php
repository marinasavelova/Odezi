<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Store;

class StoreTableSeeder extends Seeder {

    public function run()
    {
        DB::table('stores')->delete();
        
        for($i=1; $i<=20; $i++)
        {
            $country = \App\Country::orderByRaw('RAND()')->first();
            $store = Store::create([
                'name' => 'Store ' . $i,
                'url' => 'http://store'.$i.'.com',
                'country_id' => $country->id,
            ]);
            $options = DB::table('payment_options')->orderBy(DB::raw('RAND()'))->take(3)->get();
            foreach($options as $option){
                \App\PaymentOptionStore::create([
                    'store_id' => $store->id,
                    'payment_option_id' => $option->id,
                ]);
            }
            $countries = DB::table('countries')->orderBy(DB::raw('RAND()'))->take(5)->get();
            foreach($countries as $country){
                \App\DeliveryStore::create([
                    'store_id' => $store->id,
                    'country_id' => $country->id,
                ]);
            }
        }
    }

}