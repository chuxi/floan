<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->boolean('activated')->default(0);
            $table->string('act_code');
            $table->boolean('banned')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();

            $table->index('username');
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
		Schema::drop('users');
	}

}
