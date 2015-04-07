<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticularsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('particulars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('particular_code');
			$table->string('description');
			$table->string('gross_weight');
			$table->string('net_weight');
			$table->integer('vat');
			$table->string('unit_price');
			$table->integer('quantity');
			$table->integer('bincard_id');
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
		Schema::drop('particulars');
	}

}
