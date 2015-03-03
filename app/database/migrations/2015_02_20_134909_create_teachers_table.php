<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->integer('id_number');
            $table->string('phone_number');
            $table->string('major_one');
            $table->string('major_two');
            $table->string('major_three');
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
		Schema::drop('teachers');
	}

}
