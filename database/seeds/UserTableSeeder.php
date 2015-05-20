<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name'=>'Marina',
            'email' => 'marina.savelova@pkp.vn.ua',
            'password'=>Hash::make('mmmmmm'),
            'remember_token'=>str_random(60)
        ]);
    }

}