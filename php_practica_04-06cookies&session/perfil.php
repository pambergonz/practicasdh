<?php
require_once("registerController.php");
require_once("partials/head.php");
session_start();

echo "hola " . $_SESSION['name'] . "!!!!!!";

var_dump($_SESSION);

var_dump($_POST);


if($_POST) {
  if (isset($_POST["logout"])){
  session_destroy();
  header("location:home.php");
  exit;
  }
}


?>
  <!-- mostrar solo si está session_start -->
  <form method="post">
    <input type="submit" name="logout" value="deslogueate">
  </form>
