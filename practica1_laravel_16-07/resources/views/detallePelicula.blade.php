@extends('plantilla')
@section('titulo')
Detalle de la Película
@section('principal')
{{--}}@section('estilo','/css/detalle.css'){{--}}
@foreach ($peliculas as $index =>$pelicula)
  {{--}} Salen corchetes en la impresion {{--}}
  @if(isset($pelicula))
  <p>Titulo:{{$pelicula['titulo']}}</p>
  <p>Pelicula:{{$pelicula['rating']}}</p>
@else <p>No exsiste esa pelicula</p>
  @endif
@endforeach
@endsection
