<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($actors as $actor)
      <li>{{$actor->first_name}} {{$actor->last_name}}
        <a href="/actor/{{$actor->id}}">Ver más</a>
      </li>
    @endforeach

    <form class="" action="actores/buscar" method="post">
      @csrf
      <input type="text" name="buscar" value="">
      <input type="submit" name="submit" value="submit">
    </form>


  </body>
</html>
