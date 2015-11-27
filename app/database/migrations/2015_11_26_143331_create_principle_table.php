<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrincipleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('principle', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('surname');
            $table->integer('phone_number');
            $table->integer('id_number');
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
		Schema::drop('principle');
	}

}
