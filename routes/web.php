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


//Localhost/public/ -->te muestra el home
Route::get('/', 'HomeController@index')->name('home');

//Muestran las vistas de cada uno -->localhost/public/balance

//Llama a la funcion invoke dentro del controlador para mostrar las transacciones.
Route::get('balance', 'BalanceController');  

Route::get('servicios', 'ServiciosController@index');
Route::post('pagoservicio', 'PagoServicioController@index')->name('pagoservicio');
Route::get('inversiones', 'InversionesController@index');






//Ejemplos

//Aqui creamos la ruta al controlador que nos brindará la vista Qindex, le estoy indicando la funcion a usar.
//Route::get('/','HomeController@index');

//Pasando un parametro
//Route::get('/{vista}','HomeController@index');
//Con Invoke
//Route::get('/{vista}','HomeController');



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

/*Route::get('/servicios', function () {
    return response()->json(array(
    	'Servicios disponibles'=>['Agua','luz','gas']
    ));
});

Route::post('/servicios', function () {
 //   return response()->json(array(
    	'servicio seleccionado'=>'Agua',
    	'idreferencia'=>'1234',
    	'importe'=>'100'
    ));
});

Route::delete('/servicios/{id}', function () {
    return response()->json(array(
    		'message'=>'Ha eliminado servicio de la agenda'
    ));
});*/