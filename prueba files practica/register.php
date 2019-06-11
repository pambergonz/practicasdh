<?php

include("registerController.php");

if($_POST){
  $errores = validateUser();
  foreach ($errores as $error => $textoError){
    echo "$textoError<br>";
  }

  if(!$errores){
    saveUsers();
    header("location:perfil.php");exit;
  }
}



 ?>

<!DOCTYPE HTML>
<html>
<body>

  <form action="register.php" method="post">
    <label>Nombre:
    <input type="text" name="nombre" value="<?=isset($nombre)? $nombre:" "?>">
    </label><br>
    <label>Email:
    <input type="text" name="email" value = "<?=isset($email)? $email:" "?>">
    </label>
    <label><br>Escribi tu contrasena:
    <input type="password" name="password">
    </label><br>
    <label>
    <input type="file" name="avatar">
    </label><br>
    <input type="submit">
  </form>
</body>
</html>
