<?php
  require_once 'connection.php';
  require_once 'functions.php';
    //preparo la consulta que quiero hacerle a la base de datos conectada.

    if(isset($_POST["search1"])){
    $resultado= $_POST['movieInput'];
    $statement = $moviesDbConnection->prepare("
    SELECT *
    FROM movies
    WHERE title like :search
    ");
    $statement-> bindValue(":search", "%$resultado%");

    $statement->execute();
    $movies = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($movies as $movie) {
      foreach ($movie as $dataColumn => $value) {
        if($value != NULL){
        echo "<b>$dataColumn</b>: $value <br>";
        }
      }
      echo "<br>";
    }

  echo "movies";
  debug($movies);
  echo"post";
  debug($_POST);
    //var_dump($resultado);
  }
    if(isset($_POST["search2"])){
    $resultado= $_POST['movieInput'];
    $statement = $moviesDbConnection->prepare("
    SELECT *
    FROM series
    WHERE title like :search
    ");
    $statement-> bindValue(":search", "%$resultado%");

    $statement->execute();
    $movies = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($movies as $movie) {
      foreach ($movie as $dataColumn => $value) {
        if($value != NULL){
        echo "<b>$dataColumn</b>: $value <br>";
        }
      }
      echo "<br>";
    }

  echo "movies";
  debug($movies);
  echo"post";
  debug($_POST);
    //var_dump($resultado);
  }

    require_once "partials/head.php"
    ?>

    <form method="post">
      <p> Qué desea buscar? </p>

      <label>Pelicula:
        <input  type="checkbox" name="search1" value="movie">
      </label>
      <input type="text" name="movieInput" value="">
      <br>
      <label>Serie:
        <input  type="checkbox" name="search2" value="serie">
      </label>
      <input type="submit">
    </form>
