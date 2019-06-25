<?php
session_start();

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
  elseif(!passEmailMatch($password,$email)) {
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
  $avatar = $_FILES['avatar'];


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
    $errors['inrePassword']="las contrasenas no coiniciden";
  }
  if($avatar["error"] != UPLOAD_ERR_OK ) {
    $errors['inAvatar'] ="tu imagen no se cargó correctamente";
  } else {
    $extension = pathinfo($avatar["name"], PATHINFO_EXTENSION);
    if ($extension !="jpg" && $extension !="png")
      $errors['inAvatar'] ="Las extensiones permitdas son jpg  y png";
  }
  return $errors;
}


function emailExist($email) {
  $allUsers = allUsers();
  foreach ($allUsers as $oneUser) {
    if ($oneUser["email"] == $email) {
      return true;
    }
  }
  return false;
}


function allUsers() {
  $users = file_get_contents("users.json");
  return json_decode($users, true);
}


function addUserId() {
  $allUsers = allUsers();
  if (!$allUsers) {
  return 1;
  }
  else {
    $lastUser = array_pop($allUsers);
    return $lastUser["id"] + 1;
  }
}


function userDetails() {
  //omitir repassword
  $usuario = [
  "id"=> addUserId(),
  "name" => trim($_POST['name']),
  "email" => trim($_POST['email']),
  "avatarFinal" => savePic($_FILES['avatar']),
  "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
  ];
  return $usuario;
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

function saveUsers() {

  $allusersInArray = allUsers();

  //hay que santiziar antes de guardarlo en array. si no posibildad erorr ej emailexist()

  $userDetails = userDetails();
  $allusersInArray[] = $userDetails;

  $jsonNewUser= json_encode($allusersInArray, JSON_PRETTY_PRINT);

  FILE_PUT_CONTENTS("users.json", $jsonNewUser);
}


function getAUserByEmail($email) {
  $allUsers = allUsers();
  foreach ($allUsers as $oneUser) {
    if ($oneUser["email"] == $email) {
      return $oneUser;
    }
  }
  return NULL;
}


function passEmailMatch($password, $email) {
  $oneUser = getAUserByEmail($email);
  if (password_verify($password,$oneUser["password"])) {
  return true;
  }
  return false;
}


function userLogin($email) {
  if(isset($_COOKIE["email"])) {
   $_SESSION["email"] = $_COOKIE["email"];
  } else {
    $_SESSION["email"] = $email;
  }
  if (isset($_POST["recordarme"])) {
    setcookie("email", $email, time() + 60 * 60);
  }
  if (isset($_POST["recordarme"])) {
    setcookie("email", $email, time() + 60 * 60);
  }
}


function updateUserDetails($email) {
  $updateUser = getAUserByEmail($email);
  $allUsers = allUsers();
  $idInUser = $updateUser['id'];

  $updateUser["email"]= $_POST["email"];
  $_SESSION["email"]= $_POST["email"];
  $updateUser["name"]= $_POST["name"];
  $updateUser["password"]= password_hash($_POST["password"], PASSWORD_DEFAULT);

  echo "<pre>";
  var_dump($updateUser);
  echo "</pre>";

  $allUsers[$idInUser-1]= $updateUser;

  echo "<pre>";
  var_dump($allUsers);
  echo "</pre>";

  $jsonNewUser= json_encode($allUsers, JSON_PRETTY_PRINT);

  FILE_PUT_CONTENTS("users.json", $jsonNewUser);
}





 ?>
