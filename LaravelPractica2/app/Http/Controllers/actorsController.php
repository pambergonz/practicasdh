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
}
