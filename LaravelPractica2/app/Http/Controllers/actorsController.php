<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class actorsController extends Controller
{
    public function directory(){
      $actors = actor::all();
      return view('/actors',compact('actors'));
    }

    public function show($id){
      $actor= actor::find($id);
      return view('/actor',compact('actor'));
    }
    public function search($name){
      $actor= actor::where('first_name' == $name );
      return view('/actores/buscar',compact('actor'));
    }
}
