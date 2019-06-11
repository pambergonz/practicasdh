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
    $password = trim($_POST["password"]);

    if (empty($nombre)) {
      $errores["inNombre"] = "Completá tu nombre";
    }
    if (empty($password)){
    $errores["password"] = "Completá tu contrasena";
  }
    if (empty($email)) {
      $errores["inEmail"] = "Completá tu email";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errores["inEmail"]= "Email inválido";
    }
    if($_FILES['error'] !== UPLOAD_ERR_OK){
      $errores["inAvatar"]= "subí una foto de perfil";
    }

    return $errores;
  }
}

function saveUsers(){
  $usersArray[]= getAllUsers();
  $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $usersArray[]= $_POST;
  $usersInJson = json_encode($usersArray);
  file_put_contents("users.json",$usersInJson);
}

function getAllUsers() {
  return  json_decode(file_get_contents('users.json'), true);
}



 ?>
