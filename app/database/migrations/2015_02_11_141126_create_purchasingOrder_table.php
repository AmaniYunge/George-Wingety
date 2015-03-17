<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasingOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchasingorders', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('particular_id');
            $table->integer('client_id');
			$table->string('your_ref_no');
			$table->string('our_ref_no');
			$table->string('purchasing_from');
			$table->string('delivered_to');
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
		Schema::drop('purchasingorders');
	}

}
