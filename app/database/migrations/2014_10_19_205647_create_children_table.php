<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('children', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('families_id');
            $table->string('name');
            $table->string('last_name');
            $table->string('last_name2');
            $table->string('grades_id');
            $table->string('born_date');
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
        Schema::drop('children');
	}

}
