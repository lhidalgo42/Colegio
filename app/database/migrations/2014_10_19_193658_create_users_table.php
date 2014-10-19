<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('rut');
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password',60);
            $table->string('phone');
            $table->tinyInteger('roles_id');
            $table->string('img')->nullable()->default(null);
            $table->string('remember_token')->nullable();
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
