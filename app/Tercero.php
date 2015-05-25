<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	protected $table = 'terceros';

	// FILLABLE es para poder guardar datos en forma de array y para usar el método create de eloquent
	protected $fillable = [

	'cedula', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'nota'
	];

	public static function selectRangoCedula(){

		return \DB::table('terceros')
			->select(['terceros.cedula'])
			->where('terceros.cedula','>',3)
			->where('terceros.cedula','<',7)
			->get();

	}

	public static function selecionOrderBy(){
		return \DB::table('terceros')
			->select(['terceros.nombre'])
			->where('terceros.nombre','<>','Eugenia Martínez Hidalgo')	
			->orderBy('nombre', 'ASC')		
			->get();
		 
	}


	public static function seleccionJoin(){
		return \DB::table('terceros')
			->select(
					  'terceros.id', 
		              'cedula', 
		              'nombre', 
		              'usuario_perfil.id as Id_usuario'
		    )
			->where('terceros.nombre','<>','Eugenia Martínez Hidalgo')	
			->orderBy('nombre', 'ASC')	
			->join('usuario_perfil', 'terceros.id','=', 'usuario_perfil.id')	
			->get();
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
