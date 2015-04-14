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
		Schema::create('proformainvoices', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('orderform_id');
            $table->string('proforma_number');
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
		Schema::drop('proformaInvoices');
	}

}
