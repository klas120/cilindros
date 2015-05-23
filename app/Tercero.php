<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	protected $table = 'terceros';

	// FILLABLE es para poder guardar datos en forma de array y para usar el método create de eloquent
	protected $fillable = [

	'cedula', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'nota'
	];

	public static function cedulasDisponibles(){
		return Tercero::all();
	}

	public static function pruebas1(){
		return Tercero::where('cedula', '>', 0)->get();
	}


	public static function pruebas2(){
		return Tercero::all();
	}

	public static function pruebas3(){
		return Tercero::all();
	}

	public static function pruebas4(){
		return Tercero::all();
	}

	public static function pruebas5(){
		return Tercero::all();
	}


}
