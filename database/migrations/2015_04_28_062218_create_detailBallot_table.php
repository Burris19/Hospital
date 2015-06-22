<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBallotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detailBallot', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('idBallot')->unsigned();
            $table->foreign('idBallot')->references('id')->on('ballots');
            $table->string('url');
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
		Schema::drop('detailBallot');
	}

}
