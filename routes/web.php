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
Route::get('balance', 'BalanceController@index');  

Route::get('servicios', 'ServiceController@index')->name('servicios');

//Route::post('pagoservicio', 'PagoServicioController@index')->name('pagoservicio');
Route::post('/services/pay','ServiceController@payService')->name('services.pay');

Route::get('inversiones', 'InvestmentController@index')->name('inversiones');
Route::post('/investment/buy', 'InvestmentController@BuyAction')->name('investment.buy');
Route::post('/investment/sell', 'InvestmentController@SellAction')->name('investment.sell')

?>
