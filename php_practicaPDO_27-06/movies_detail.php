<?php

require_once 'connection.php';
require_once 'functions.php';
  $statement = $moviesDbConnection->prepare("
  SELECT m.title, m.length, m.rating, g.name as genero
  FROM movies AS m
  LEFT JOIN genres AS g ON g.id = m.genre_id
  WHERE m.id = :id
  ");

  $statement->bindValue(':id', $_GET['id'],PDO::PARAM_INT);
  $statement-> execute();
  $movie = $statement->fetch(PDO::FETCH_ASSOC);
  debug($movie);
  $title = $movie['title'];
  require_once 'partials/head.php';
 ?>

 <ul>
   <li>Titulo: <?=$movie['title']?></li>
   <li>Rating:<?=$movie['rating']?></li>
   <?php if(isset($movie['genero'])): ?>
     <li>Genero:<?=$movie['genero']?></li>
   <?php endif; ?> 
   <li>Duración:<?=$movie['length']?>min</li>
 </ul>
