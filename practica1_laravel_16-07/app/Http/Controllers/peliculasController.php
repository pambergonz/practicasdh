<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class peliculasController extends Controller
{
  public function detalle($id) {
    //.array una sola vez para dos f()
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

      foreach ($peliculas as $index =>$pelicula){
        if($index == $id){
        return $pelicula;
        }
     }
         return view('peliculas',compact('detallePelicula','pelicula'));
  }


  public function listado(){
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
    }
}
