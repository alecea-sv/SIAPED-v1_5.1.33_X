<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleado', function(Blueprint $table)
		{
			// $table->increments('id');
			$table->varchar('dui', 10);
			$table->varchar('id_escuela', 10);
			$table->text('nombres');
			$table->text('apellidos');
			$table->text('sexo');
			$table->varchar('direccion', 50);
			$table->numeric('telefono', 15);
			$table->numeric('nit', 14);
			$table->numeric('isss', 15);
			$table->numeric('nup', 15);
			$table->varchar('dui_ext', 10);
			$table->date('fecha_exp');
			$table->varchar('nom_afp', 7);
			$table->varchar('email', 40);
			$table->date('fecha_nac');
			$table->varchar('nacionalidad', 15);
			$table->varchar('estado_civil', 7);
			$table->varchar('nombre_conyuge', 60);
			// $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empleado');
	}

}
