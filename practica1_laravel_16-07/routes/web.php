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

Route::get('/miPrimeraRuta', function () {
    return "Creé mi primer ruta en Laravel";
});

Route::get('/esPar/{numero}', function($numero) {
    if($numero % 2 == 0){
      return "el numero es par";
    }
});

Route::get('/sumar/{numero1}/{numero2}/{numero3?}', function($numero1,$numero2,$numero3 = NULL) {
      return $numero1 + $numero2 + $numero3;
});

Route::get('/peliculas', 'peliculasController@listado');

Route::get('/peliculas/{id}', 'peliculasController@detalle');
