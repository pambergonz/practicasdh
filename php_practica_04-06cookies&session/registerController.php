<?php

function loginValidate() {
  $errores = [];
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (empty($email)) {
    $errores['inEmail']="Completá tu email";
  }
  if (empty($password)) {
    $errores['inPassword']="Completá tu contraseña";
  }
  elseif(!passEmailMatch($password,$email)){
  $errores['inEmail']="Credenciales incorrectas,<a href='register.php'>registrate  haciendo click acá</a>";
  }
  
  return $errores;
}

function registerValidate() {
  $errors = [];
  $name= trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $repassword = trim($_POST['repassword']);
  $country= $_POST['nacionalidad'];

  if (empty($name)) {
    $errors['inFullName']="Completá tu nombre";
  }
  if (empty($email)) {
    $errors['inEmail']="Completá tu email";
  }
  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors['inEmail'] = "Introducí un formato de mail correcto";
  }
  elseif (emailExist($email)) {
    $errors['inEmail'] = "el mail ya esta registrado";
  }
  if(empty($country)){
    $errors['inCountry'] = "completá tu nacionalidad";
  }
  if (empty($password)) {
    $errors['inPassword']="Completá tu contraseña";
  }
  elseif (strlen($password) < 6 ) {
    $errors['inPassword'] = "La contraseña debe tener mas de cinco caracteres";
  }
  if (empty($repassword)) {
    $errors['inrePassword']="Volvé a escribir tu contrasena";
  }
  elseif ($password !== $repassword) {
    $errors['inrePassword']="la contrasena no coinicide";
  }
  return $errors;
}

function saveUsers() {

  $allusersInArray = allUsers();

  //hay que armar usuario trimeando cada campo antes de guardarlo en array. si no posibildad erorr ej emailexist()

  $userDetails = userDetails();
  $allusersInArray[] = $userDetails;

  $jsonNewUser= json_encode($allusersInArray, JSON_PRETTY_PRINT);

  FILE_PUT_CONTENTS("users.json", $jsonNewUser);
}

function allUsers(){
  $users = file_get_contents("users.json");
  return json_decode($users, true);
}

function emailExist($email){
  $allUsers = allUsers();
  foreach ($allUsers as $oneUser) {
    if ($oneUser["email"] == $email){
      return true;
    }
  }
     return false;
}

function userDetails() {
  //no incluir repassword
  $usuario = [
  "id"=> addUserId(),
  "name" => trim($_POST['name']),
  "email" => trim($_POST['email']),
  "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
  ];

  return $usuario;
}

function addUserId(){
  $allUsers = allUsers();
  $lastUser = array_pop($allUsers);
  if (!$allUsers) {
  return $lastUser["id"] = 1;
  }
  else {
  return $lastUser["id"] + 1;
  }
}

//se puede reemplazar esta funcion por emailExist para validar login y register
function getAUserByEmail($email){
  $allUsers = allUsers();
  foreach ($allUsers as $oneUser) {
    if ($oneUser["email"] == $email){
      return $oneUser;
    }
  }
  return NULL;
}

function passEmailMatch($password,$email){
  $allUsers = allUsers();
  foreach ($allUsers as $oneUser) {
    if(password_verify($password,$oneUser["password"]) && $oneUser["email"] == $email){
      return true;
    }
  }
  return false;
  }

function userLogin($email) {
  if(isset($_COOKIE["email"])){
    $_SESSION["email"] = $_COOKIE["email"];
  } else {
  $_SESSION["email"] = $email;
  }  // guardar todos los datos de userDetails(), si esta setiada la cookie con el mail que matchea en json, traer todos los datos a $_session.
  if (isset($_POST["recordarme"])) {
    setcookie("email", $email, time() + 60 * 60);
  }

}


 ?>
