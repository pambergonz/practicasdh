<?php

require_once 'connection.php';
require_once 'functions.php';



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
