<?php
 session_start();
 if($_POST["reiniciar"]) {
   $_SESSION["contador"] = 0;
 }
 if($_POST["incrementar"]) {
   $_SESSION["contador"] += 1;
 }
 var_dump($_SESSION);
 var_dump($_SESSION);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
    <input type="button" name="reiniciar">Reiniciar</button>
    <input type="button" name="incrementar">Incrementar</button>
  </form>

  </body>
</html>
