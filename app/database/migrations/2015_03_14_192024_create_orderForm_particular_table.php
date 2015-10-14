<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderFormParticularTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderform_particular', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('orderform_id');
            $table->integer('particular_id');
            $table->integer('quantity_ordered');
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
        Schema::drop('orderform_particular');
    }

}
