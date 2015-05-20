<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteSubsubcategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function($table)
    {
      $table->dropForeign('products_sub_subcategory_id_foreign');
      $table->dropColumn(array('sub_subcategory_id'));
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function(Blueprint $table)
    {
      $table->integer('sub_subcategory_id')->unsigned()->nullable();
      $table->foreign('sub_subcategory_id')
      ->references('id')->on('categories')
      ->onDelete('set null');
    });
	}

}
