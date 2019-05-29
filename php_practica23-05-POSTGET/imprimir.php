<?php

include("validate.php");

if($_POST){
  $errores = validateUser();
  foreach ($errores as $error => $textoError){
    echo "$textoError<br>";
  }
}


 ?>

<!DOCTYPE HTML>
<html>
<body>

  <form action="imprimir.php" method="post">
    <label>Nombre:
    <input type="text" name="nombre" value="<?=isset($nombre)? $nombre:" "?>">
    </label><br>
    <label>Email:
    <input type="text" name="email" value = "<?=isset($email)? $email:" "?>">

    </label><br>
    <input type="submit">
  </form>
</body>
</html>
