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

Route::get('/peliculas', function() {
      $peliculas = [
          0 =>[
          "titulo"=>"Rey León",
          "rating"=> "5"
      ],

          1 => [
          "titulo"=>"Alicia",
          "rating"=> "5"
      ],
          2 =>[
              "titulo"=>"Sirenita",
          "rating"=> "5"
      ],

          3 => [
          "titulo"=>"Harry Potter",
          "rating"=> "5"
      ],
];
      return view('peliculas',compact('peliculas'));
});

Route::get('/peliculas/{id}', function($id){
    $peliculas = [
        0 =>[
        "titulo"=>"Rey León",
        "rating"=> "5"
    ],

        1 => [
        "titulo"=>"Alicia",
        "rating"=> "5"
    ],
        2 =>[
        "titulo"=>"Sirenita",
        "rating"=> "5"
    ],

        3 => [
        "titulo"=>"Harry Potter",
        "rating"=> "5"
    ],
];

    return view('detallePelicula', compact('id','peliculas'));
});
