<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('category_id')->unsigned()->nullable(); 
      $table->integer('subcategory_id')->unsigned()->nullable();
      $table->integer('sub_subcategory_id')->unsigned()->nullable();
      $table->integer('shop_id')->unsigned()->nullable();
      $table->integer('brand_id')->unsigned()->nullable();
      $table->decimal('price', 10, 2);
      $table->decimal('shipping_costs', 10, 2);
      $table->string('shipping_duration_descr');
      $table->string('image');
      $table->text('description');
      $table->string('color');
      $table->integer('ean_code');
     	$table->string('url');
			
			$table->foreign('category_id')
      ->references('id')->on('categories')
      ->onDelete('set null');
      $table->foreign('subcategory_id')
      ->references('id')->on('categories')
      ->onDelete('set null');
      $table->foreign('sub_subcategory_id')
      ->references('id')->on('categories')
      ->onDelete('set null');
      $table->foreign('shop_id')
      ->references('id')->on('stores')
      ->onDelete('set null');
      $table->foreign('brand_id')
      ->references('id')->on('brands')
      ->onDelete('set null');
      
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
