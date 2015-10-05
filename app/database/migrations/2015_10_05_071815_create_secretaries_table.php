<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSecretariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secretaries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->integer('e-mail');
            $table->string('id_number');
            $table->string('phone-number');
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
		Schema::drop('secretaries');
	}

}
