@extends('plantilla')

@section('titulo')
Todas las películas
@endsection
@section('principal')
@forelse ($peliculas as $pelicula)
  <p>{{$pelicula['titulo']}}</p>
  <p>{{$pelicula['rating']}}</p>
@empty <p>lista vacia<p>
@endforelse
@endsection
