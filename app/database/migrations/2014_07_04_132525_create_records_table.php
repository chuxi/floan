<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('pid');
            $table->unsignedInteger('uid');
            $table->unsignedInteger('amount');
            $table->timestamp('stime');

            $table->timestamps();

            $table->foreign('pid')
                ->references('id')->on('projects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('uid')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('records');
	}

}
