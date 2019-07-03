<?php
  require_once 'connection.php';
  require_once 'functions.php';
    //preparo la consulta que quiero hacerle a la base de datos conectada.

    function buscarMarca(PDO $db) {
  $resultado = $_GET['buscador'];
  $query = $db->prepare("SELECT * FROM  marcas WHERE nombre LIKE :resultado");
  $query-> bindValue(":resultado", "%$resultado%");
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);

}   $resultado=$_POST["search"];
    $statement = $moviesDbConnection->prepare("
    SELECT *
    FROM movies
    WHERE title like :search
    ");
    $statement-> bindValue(":search", "%$resultado%");
    //ejecuto la consulta que que preparé/
    $statement->execute();
    $movies = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($movies);

    require_once "partials/head.php"
    ?>

    <form method="post">
      <label>buscar:
        <input type="text" name="search">
      </label>
      <input type="submit">

    </form>
