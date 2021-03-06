<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

// 	RUTAS DE TERCEROS   -----------------------------------------
resource('terceros','TerceroController');

Route::post('actualizar-tercero/{id}', [
	'as' => 'actualizar_tercero',
	'uses' => 'TerceroController@update'
	]);

Route::get('terceros', 'TerceroController@index');
Route::get('terceros/{id}/edit', 'TerceroController@edit');
Route::get('terceros/{id}/delete', 'TerceroController@destroy');

Route::get('terceros_mostrar', 'TerceroController@mostrar');




//---------------------------------------------------------------


/*Route::get('eliminar-tercero/{id}', [
		'as' => 'eliminar_tercero',
		'uses' => 'TerceroController@destroy'
	]);
	*/