<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('projects', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';

			$table->increments('id');
            $table->string('cid');
			$table->string('title');
            $table->bigInteger('amount', false, true);
            $table->tinyInteger('rate');
            $table->timestamp('expiration');
            $table->unsignedBigInteger('collected');
            $table->tinyInteger('duration');
            $table->timestamp('stime');
            $table->timestamp('etime');
			$table->timestamps();

            $table->index('title');
            $table->unique('title');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
