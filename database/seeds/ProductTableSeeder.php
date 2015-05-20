<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\Product;

class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->delete();
        
        $shipping_duration_descr = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ';
        $description = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.';
        
        for($i=1; $i<=20; $i++)
        {
            $category = App\Category::where('parent_id', null)->orderBy(DB::raw('RAND()'))->first();
            $subcategory = App\Category::where('parent_id', $category->id)->orderBy(DB::raw('RAND()'))->first();
            $shop = DB::table('stores')->orderBy(DB::raw('RAND()'))->first();
            $brand = DB::table('brands')->orderBy(DB::raw('RAND()'))->first();
            Product::create([
                'name' => 'Product ' . $i,
                'category_id' => $category->id,
                'subcategory_id' => $subcategory->id,
                'shop_id' => $shop->id,
                'brand_id' => $brand->id,
                'price' => 150,
                'shipping_costs' => 10,
                'shipping_duration_descr' => $shipping_duration_descr,
                'description' => $description,
                'color' => 'red',
                'url' => 'http://product'.$i.'.com',
            ]);
        }
    }

}