<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pdf', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('Group1Dato1');
            $table->string('Group1Dato2');
            $table->string('Group1Dato3');
            $table->string('Group1Dato4');
            $table->string('Group1Dato5');
            $table->string('Group1Dato20');
            $table->string('Group1Dato6');
            $table->string('Group1Dato7');
            $table->string('Group1Dato8');
            $table->string('Group1Dato9');
            $table->string('Group2Dato1');
            $table->string('Group2Dato2');
            $table->string('Group2Dato3');
            $table->string('Group2Dato4');
            $table->string('Group2Dato5');
            $table->string('Grupo3Dato1');
            $table->string('Grupo3Dato2');
            $table->string('Grupo3Dato3');
            $table->string('Grupo3Dato4');
            $table->string('Grupo3Dato5');
            $table->string('Grupo3Dato6');
            $table->string('Grupo3Dato7');
            $table->string('Grupo3Dato8');
            $table->string('Grupo4Dato1');
            $table->string('Grupo4Dato2');
            $table->string('Grupo4Dato3');
            $table->string('Grupo4Dato4');
            $table->string('Grupo4Dato5');
            $table->string('Grupo4Dato6');
            $table->string('Grupo4Dato7');
            $table->string('Grupo4Dato8');
            $table->string('Grupo4Dato9');
            $table->string('Grupo4Dato10');
            $table->string('Grupo4Dato11');
            $table->integer('idBallot')->unsigned();
            $table->foreign('idBallot')->references('id')->on('ballots');
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
		Schema::drop('pdf');
	}

}
