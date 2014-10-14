<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creating the table
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('username', 32);
			$table->string('password', 64);
			$table->string('email', 128);
			$table->string('first_name', 64);
			$table->string('last_name', 64);
			$table->text('user_agent');
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
		// Drop the tables for rollback
		Schema::drop('users');
	}

}