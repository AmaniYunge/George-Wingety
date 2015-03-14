<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaInvoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proformaInvoice', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('particular_id');
            $table->string('invoice_no');
            $table->integer('client_id');
            $table->string('provider_name');
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
		Schema::drop('proformaInvoice');
	}

}
