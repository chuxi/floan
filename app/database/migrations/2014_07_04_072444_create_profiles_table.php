<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';

			$table->increments('id');
            $table->unsignedInteger('pid');
            $table->string('dbjg')->nullable(); //担保机构
            $table->text('dyw')->nullable();    //抵押物
            $table->text('fxkz')->nullable();   //风险控制
            $table->text('dbjgyj')->nullable(); //担保机构意见
            $table->text('zjyt')->nullable();   //资金用途
            $table->text('hkly')->nullable();   //还款来源
            $table->text('qybj')->nullable();   //企业背景
            $table->text('jyfw')->nullable();   //经营范围
            $table->text('jyzk')->nullable();   //经营状况

			$table->timestamps();

            $table->foreign('pid')
                ->references('id')->on('projects')
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
		Schema::drop('profiles');
	}

}
