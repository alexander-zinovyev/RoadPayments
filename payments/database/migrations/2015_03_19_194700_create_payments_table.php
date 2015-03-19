<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('payments', function(Blueprint $table)
		{
	        $table->string('accountId');
	        $table->string('paymentsId');
	        $table->timestamps('date');
	        $table->integer('status');
	        $table->integer('summary');
	        $table->integer('coins');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
