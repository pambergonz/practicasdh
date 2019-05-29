<?php

foreach ($_POST as $campo) {
  echo "$campo <br>";
}

$nombre = " ";
$email = " ";

if($_POST){
  $nombre = trim($_POST["nombre"]);
  $email = trim($_POST["email"]);
}

function validateUser(){
  if($_POST){
    $errores = [];
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);

    if (empty($nombre)) {
      $errores["inNombre"] = "Completá tu nombre";
    }
    if (empty($email)) {
      $errores["inEmail"] = "Completá tu email";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errores["inEmail"]= "Email inválido";
    }
    return $errores;
  }
}

 ?>
