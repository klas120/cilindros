<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tercero;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTerceroRequest;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\Facades\Session;



class TerceroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		// $result = Tercero::selecionOrderBy();
		
		// dd($result);


		// SE ESTÁ USANDO PAGINACIÓN Y LA BUSQUEDA SÓLO MUESTRA 
		// EL TAMAÑO DE LA	PAGINACION, POR ESO SE ENVÍA UN ARREGO 
		// CON LA MISMOS DATOS, PERO CANTIDAD DIFERENTE.

		$terceros = Tercero::orderBy('nombre', 'asc')->paginate(10);
		$cedulas = Tercero::all();		

		return view('terceros.index', array(
				      						  'terceros' => $terceros, 
				      						  'cedulas' => $cedulas));

		
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// MÉTODO DE CINFONI PARA IMPRIMIR LOS DATOS = dd($terceros);
		
		return view('terceros.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTerceroRequest $request) //Request $request
	{		
		
		if($tercero = Tercero::create($request->all())){
		    Session::flash('message','El registro se ha guardado correctamente.');
			Session::flash('class','success glyphicon glyphicon-ok');
		}else{
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger glyphicon glyphicon-remove');
		}

		return view('terceros.create');
				
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	public function mostrar()
	{
		$id= Input::get('micedula');

		//SIN LA OPCION DE PAGINATE() NO MUESTRA LOS DATOS EN LA VISTA 
		//Y DA ERROR EN MODEL TERCERO.
		$tercero = Tercero::where('cedula', '=', $id)->paginate();
		
		return view('terceros.mostrar', compact('tercero'));
	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tercero = Tercero::findOrFail($id);	

		return view('terceros.editar', compact('tercero'));
		
	}	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	

		$tercero = Tercero::findOrFail($id);

		// Importar la clase de Input::get('');    glyphicon glyphicon-floppy-saved
	    // use Illuminate\Support\Facades\Input;   glyphicon glyphicon-check  |  glyphicon glyphicon-thumbs-up | glyphicon glyphicon-saved

		$tercero->cedula = Input::get('cedula');
		$tercero->nombre = Input::get('nombre');
		$tercero->rol = Input::get('rol');
		$tercero->direccion = Input::get('direccion');
		$tercero->telefono = Input::get('telefono');
		$tercero->email = Input::get('email');
		$tercero->nota = Input::get('nota');

		if ($tercero->save()) {
			Session::flash('message','El registro se ha actualizado.');
			Session::flash('class','success glyphicon glyphicon-ok');			
		} else {
			Session::flash('message','Error al actualizar registro!');
			Session::flash('class','danger glyphicon glyphicon-remove');
		}	

		return view('terceros.editar', compact('tercero'));

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	

		$tercero = Tercero::findOrFail($id);

		if ($tercero->delete()) {
			Session::flash('message','El registro se ha eliminado correctamente.');
			Session::flash('class','success glyphicon glyphicon-ok');
		} else {
			Session::flash('message','Error al eliminar registro!');
			Session::flash('class','danger glyphicon glyphicon-remove');
		}

	  return redirect('terceros');	  
	 
	}
		

}
