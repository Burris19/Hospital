<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BallotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ballots', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('place');
            $table->string('url');
            $table->string('fullname');
            $table->string('edad');
            $table->string('sexo');
            $table->string('sentroReferido');
            $table->enum('state',[0,1])->default(0);
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

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
		Schema::drop('ballots');
	}

}
