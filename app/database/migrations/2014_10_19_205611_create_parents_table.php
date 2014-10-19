<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('parents', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('families_id');
            $table->string('rut')->unique()->nullable()->default(null);
            $table->boolean('economic_support')->default(false);
            $table->string('name')->nullable()->default(null);
            $table->string('last_name')->nullable()->default(null);
            $table->string('last_name2')->nullable()->default(null);
            $table->date('born_date')->nullable()->default(null);
            $table->string('sex')->nullable()->default(null);
            $table->string('profession')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->integer('commune_id')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('work_place')->nullable()->default(null);
            $table->string('work_address')->nullable()->default(null);
            $table->string('phones')->nullable()->default(null);
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
        Schema::drop('parents');
	}

}
