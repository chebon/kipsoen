<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChelalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chelals', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('firstname');
            $table->string('secondname');
            $table->string('lastname');
            $table->integer('contact');
            $table->integer('regno');
            $table->integer('roomnumber');
            $table->string('studyyear');
            $table->string('email');
            $table->string('hostelname');
            $table->string('gender');
            $table->string('desc');
            $table->string('payment');
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
		Schema::drop('chelals');
	}

}
