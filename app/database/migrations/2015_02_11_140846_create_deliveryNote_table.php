<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryNoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deliveryNote', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('particular_id');
			$table->string('deliveryNote_no');
			$table->string('order_no');
			$table->string('attention_name');
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
		Schema::drop('deliveryNote');
	}

}
