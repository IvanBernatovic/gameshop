<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			/**
			 * Basic info
			 */
			$table->increments('id');
			$table->string('name', 500);
			$table->string('email')->unique();
			$table->string('password', 60);

			/**
			 * Address information
			 */
			$table->text('address', 500);
			$table->string('country');
			$table->sring('state')->nullable();
			$table->string('ZIP');
			$table->string('city');

			$table->rememberToken();
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
