<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terceros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cedula',50)->unique();
			$table->string('nombre');
			$table->enum('rol',['Cliente','Proveedor','Administrador']);
			$table->string('direccion');
			$table->string('telefono',50);
			$table->string('email')->nullable();
			$table->string('nota', 1000)->nullable();
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
		Schema::drop('terceros');
	}

}
