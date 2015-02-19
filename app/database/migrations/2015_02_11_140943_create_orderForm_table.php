<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderForm', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('particular_id');
			$table->string('client_id');
			$table->string('bill_to');
			$table->string('ship_to');
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
		Schema::drop('orderForm');
	}

}
