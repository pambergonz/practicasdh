<?php
  require_once 'connection.php';
  require_once 'functions.php';
  //preparo la consulta que quiero hacerle a la base de datos conectada.
  $statement = $moviesDbConnection->prepare("
  SELECT m.title, m.id, g.name as genero
  FROM movies as m
  LEFT JOIN genres AS g ON m.genre_id= g.id
  ORDER BY title asc
  ");
  //ejecuto la consulta que que preparé/
  $statement->execute();
  $movies = $statement->fetchAll(PDO::FETCH_ASSOC);
  $title = "Listado de pelis";
  require_once 'partials/head.php';
?>

 <ul>
   <?php foreach ($movies as $movie): ?>
      <li><b>Título:</b><?= $movie['title']?> <br></li>
      <li><b>Género:</b><?= isset($movie['genero'])? $movie['genero'] : "No tiene género"?> <br></li>
      <a href="movies_detail.php?id=<?= $movie['id'];?>">ver más</a>
   <?php endforeach; ?>
 <ul>
