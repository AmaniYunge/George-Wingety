<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaInvoiceParticularsTable extends Migration {


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particular_proforma_invoice', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('proforma_invoice_id');
            $table->integer('particular_id');
            $table->integer('quantity');
            $table->integer('unitPrice');
            $table->integer('vat');
            $table->integer('total');
            $table->integer('dis');
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
        Schema::drop('particular_proforma_invoice');
    }

}
