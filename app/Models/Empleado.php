<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Empleado extends Model
{

	public $table = "empleado";
	public $primaryKey = "dui";
	public $incrementing = false;
	public $timestamps = false;

	public $fillable = [
		"dui",
		"id_escuela",
		"nombres",
		"apellidos",
		"sexo",
		"direccion",
		"telefono",
		"nit",
		"isss",
		"nup",
		"dui_ext",
		"fecha_exp",
		"nom_afp",
		"email",
		"fecha_nac",
		"nacionalidad",
		"estado_civil",
		"nombre_conyuge",
	];

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = [
		"nombres" => "string",
		"apellidos" => "string",
		"sexo" => "string",
  ];

	public static $rules = [
		"dui" => "required",
		"id_escuela" => "required",
		"nombres" => "required",
		"apellidos" => "required",
		"nit" => "required",
		"isss" => "required",
		"nup" => "required",
	];

}
