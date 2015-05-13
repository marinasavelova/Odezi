<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePaymentOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store_payment_option', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('store_id')->unsigned();
			$table->integer('payment_option_id')->unsigned();
			$table->foreign('store_id')
						->references('id')->on('stores')
						->onDelete('cascade');
			$table->foreign('payment_option_id')
						->references('id')->on('payment_options')
						->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('store_payment_option');
	}

}
