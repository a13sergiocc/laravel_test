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

/*Route::get('/', function() {
	$nombre = 'hijos del rock and roll';
	$coche = 'BMW';

	//return View::make('bienvenidos')->with('nombre', 'Audi');
	//return View::make('bienvenidos', array('nombre'=>$nombre));
	// return view('bienvenidos')->with('nombre', $nombre)->with('coche', $coche);
	
	// return view('bienvenidos', array('nombre'=>$nombre, 'coche'=>$coche));

	// Métodos mágicos
	//return view('bienvenidos')->withNombre('Manuel')->withCoche('Panda');

	$colores=array('rojo','verde', 'amarillo');
	return view('bienvenidos')->withListado($colores)->withNombre('Manuel')->withCoche('BMW');

});*/


Route::get('/', function() {
	return view('inicio');
});

Route::get('/sobre', function() {
	return view('sobre');
});

Route::get('/contactar', function() {
	return view('contactar');
});

