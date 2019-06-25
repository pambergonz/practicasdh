<?php

function registerValidate(){
  //creo un array de errores
  $errors = [];
  //guardo lo que vino por post en la posicion name
  $fullName = trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $repassword = trim($_POST['repassword']);
  $country= $_POST['nacionalidad'];
  //pregunto si full name está vacio
  if (empty($fullName)) {
  //seteo en el array de errores la posicion inFullName.
    $errors['inFullName']="Completá tu nombre";
  }
  if (empty($email)) {
    $errors['inEmail']="Completá tu email";
  }
  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors['inEmail'] = "Introducí un formato de mail correcto";
  }
  if (emailExist($email)) {
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

  //retorno un array asociativo con todos los errores
  return $errors;
}

function saveUsers() {
$usersList = json_decode(file_get_contents('usuarios.json'), true);
unset($_POST['repassword']);
$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
$usersList[] = $_POST;
file_put_contents('usuarios.json', json_encode($usersList));
}

function getAllUsers(){
return json_decode(file_get_contents('usuarios.json'), true);
}

function emailExist($email) {
  $allUsers = getAllUsers();

  foreach ($allUsers as $oneUser) {
    if ($oneUser['email'] == $email) {
      return true;
    }
  }
  return false;
}

function savePic($file) {
  $name = $file['name'];

  $ext = pathinfo($name, PATHINFO_EXTENSION);

  $finalSavePath = 'avatars/' . uniqid('img-') . "." . $ext;

  var_dump($file);

  $tempFile = $file['tmp_name'];

  move_uploaded_file($tempFile,  $finalSavePath);

  return $finalSavePath;
}




 ?>
