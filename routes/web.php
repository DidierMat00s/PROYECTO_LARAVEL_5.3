<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|post,get,put,delete
*/
/*PRUEBA CONTROLLER*/

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
/*CONTROLADOR RESTFUL*/

Route::resource('movie','MovieController');

/*PRUEBAS RUTAS*/
Route::get('prueba', function(){
	return "Hola desde routes.php";
});

Route::get('nombre/{nombre}', function($nombre){
	return "Mi nombre es: ".$nombre;
});

Route::get('edad/{edad}', function($edad){
	return "Mi edad es: ".$edad;
});

Route::get('edad2/{edad?}', function($edad = 20){
	return "Mi edad es: ".$edad;
});

Route::get('/', function () {
    return view('welcome');
});
