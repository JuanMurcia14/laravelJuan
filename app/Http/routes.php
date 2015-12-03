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

Route::get('/', function () {
    return view('welcome');
});


Route::get('adminer', function () {
    return view('adminer.index');
});


Route::get('operacion/suma', 'OperacionController@suma');
Route::get('operacion/sumar', 'OperacionController@getsumar');
Route::get('operacion/suma/valor1/{valor1}/valor2/{valor2}', 'OperacionController@getsuma');
Route::get('Ejercicio', 'EjercicioController@ejercicio');
Route::get('Equipos/pais', 'EjercicioController@getequipo');
Route::get('Equipo/seleccion/{select}', 'EjercicioController@equipo');

Route::get('autobus', 'AutobusController@index');