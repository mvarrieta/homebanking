<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    return view('home');
});


Route::get('servicios', function () {
    return view('servicios');
});

Route::get('balance', function () {
    return view('balance');
});

Route::get('inversiones', function () {
    return view('inversiones');
});

Route::get('/person', function () {
    return response()->json(array(
    	'status'=>'success',
    	'message'=>'Obtengo todos los usuarios'
    ));
});
Route::get('/person/{id}', function () {
    return "Obtengo de Usuarios";
});

Route::post('/person', function () {
    return "Creo un Usuario";
});

Route::put('/person', function () {
    return "Modifico Usuario";
});
Route::delete('/person', function () {
    return "Elimino Usuario";
});

Route::get('/servicios', function () {
    return response()->json(array(
    	'Servicios disponibles'=>['Agua','luz','gas']
    ));
});

Route::post('/servicios', function () {
    return response()->json(array(
    	'servicio seleccionado'=>'Agua',
    	'idreferencia'=>'1234',
    	'importe'=>'100'
    ));
});

Route::delete('/servicios/{id}', function () {
    return response()->json(array(
    		'message'=>'Ha eliminado servicio de la agenda'
    ));
});