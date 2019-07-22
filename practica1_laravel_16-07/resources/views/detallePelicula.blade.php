@extends('plantilla')
@section("titulo")
Detalle de la Película
@endsection
@section("principal")
@foreach ($peliculas as $index =>$pelicula)
  @if($index == $id)
  <p>Titulo:{{$pelicula['titulo']}}</p>
  <p>Pelicula:{{$pelicula['rating']}}</p>
  @elseif($id == !$index)
  <p>No exsiste esa pelicula</p>
  @endif
@endforeach
@endsection
