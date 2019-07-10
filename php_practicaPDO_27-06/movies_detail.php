<?php

require_once 'connection.php';
require_once 'functions.php';
  $statement = $moviesDbConnection -> prepare("
  SELECT movies.title, movies.rating , movies.awards, movies.length, genres.name as genero
  FROM movies
  LEFT JOIN genres ON genres.id= genre_id
  WHERE :id = movies.id
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
   <?php if(isset($movie['length'])): ?>
     <li>Duración:<?=$movie['length']?>min</li>
   <?php endif; ?>
   <?php if(isset($movie['awards'])): ?>
     <li>Premios:<?=$movie['awards']?></li>
   <?php endif; ?>
 </ul>
