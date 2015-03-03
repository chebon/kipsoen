<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('results', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('examination');
            $table->string('mathematics');
            $table->string('english');
            $table->string('kiswahili');
            $table->string('biology');
            $table->string('chemistry');
            $table->string('physics');
            $table->string('history');
            $table->string('religious_education');
            $table->string('angriculture');
            $table->string('business_studies');
            $table->string('total');
            $table->string('principles_comment');
            $table->string('class_teacher_comment');
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
		Schema::drop('results');
	}

}
