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
        Schema::create('proformainvoice_particular', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('proformainvoice_id');
            $table->integer('particular_id');
            $table->integer('quantity');
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
        Schema::drop('proformainvoice_particular');
    }

}
