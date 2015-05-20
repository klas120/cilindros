<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	protected $table = 'terceros';

	// FILLABLE es para poder guardar datos en forma de array y para usar el método create de eloquent
	protected $fillable = [

	'cedula', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'nota'
	];

}
