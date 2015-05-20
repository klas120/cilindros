<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTerceroRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.  [unique:tabla,columna]
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'cedula'=>'required|min:8|numeric|unique:terceros,cedula',
			'nombre'=>'required|string|min:3',
			'rol'=>'required',
			'direccion'=>'required',
			'telefono'=>'required|numeric',
			'email'=>'required|email',
			'nota'=>'max:1000'
			
		];
	}

}
