<?php
session_start();
require_once("registerController.php");
require_once("partials/head.php");

if ($_POST) {

  $errorsInLogin = loginValidate();

  $password= password_hash($_POST['email'],PASSWORD_DEFAULT);
  $email= trim($_POST['email']);



  if (!$errorsInLogin){

   $userRegistered = passEmailMatch($email,$password);
   var_dump($userRegistered);
   $_SESSION = $userRegistered;

    header("location:perfil.php");
  }
}


?>


  <form method="post" enctype="multipart/form-data">
    <label> Email:
      <input type="text" name="email" value="<?=isset($email) ? $email:"";?>">
    </label>
    <?php if (isset($errorsInLogin['inEmail'])) : ?>
      <?=$errorsInLogin['inEmail']?>
    <?php endif; ?>
    <br>
    <label>Clave:
      <input type="password" name="password">
    </label>
    <?php if (isset($errorsInLogin['inPassword'])) : ?>
      <?=$errorsInLogin['inPassword']?>
    <?php endif; ?>
    <br>
    <input type="submit" value="Submit">
  </form>
