<?php
  require_once ('connection.php');
  require_once ('functions.php');

  debug($_POST);


  $statement = $moviesDbConnection->prepare("
  INSERT INTO movies values(DEFAULT, :created_at,:updated_at, :title, :rating, :awards, :release_date, :length, :genre_id)");


  $statement->bindValue(':title', $_POST['movieTitle']);
  $statement->bindValue(':created_at', $_POST['created']);
  $statement->bindValue(':rating', $_POST['rating']);
  $statement->bindValue(':awards', $_POST['awards']);
  $statement->bindValue(':release_date',$_POST['release_date']);
  $statement->bindValue(':updated_at', $_POST['updated_at']);
  $statement->bindValue(':length', $_POST['length']);
  $statement->bindValue(':genre_id', $_POST['genre_id']);


  $statement->execute();
