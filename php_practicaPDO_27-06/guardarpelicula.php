<?php
  require_once ('connection.php');
  require_once ('functions.php');



  try {
  $statement = $moviesDbConnection->prepare("
  INSERT INTO movies values(DEFAULT, :created_at,:updated_at, :title, :rating, :awards, :release_date, :length, :genre_id)");

  $statement->bindValue(':title', $_POST['movieTitle'], PDO::PARAM_STR);
  $statement->bindValue(':created_at', $_POST['created']);
  $statement->bindValue(':rating', $_POST['rating']);
  $statement->bindValue(':awards', $_POST['awards'],PDO::PARAM_INT);
  $statement->bindValue(':release_date',$_POST['release_date']);
  $statement->bindValue(':updated_at', $_POST['updated_at']);
  $statement->bindValue(':length', $_POST['length']);
  $statement->bindValue(':genre_ida', $_POST['genre_id']);
  }
  catch (PDOException $mensaje) {
    var_dump($mensaje);
    echo "el error al agregar pelicula fue" . $mensaje; 
  }

  $statement->execute();

  debug($_POST);
