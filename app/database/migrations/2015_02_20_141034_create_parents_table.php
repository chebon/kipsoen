<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->integer('phone_number');
            $table->integer('id_number');
            $table->string('occupation');
            $table->string('student');
            $table->string('parenity');
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
		Schema::drop('parents');
	}

}
