<?php

session_start();

$_SESSION["contador"] = 0;

if(isset($_SESSION["contador"])) {
  echo $_SESSION['contador'];
}

var_dump($_SESSION);

//
// $contador = isset($_SESSION["contador"])?$_SESSION["contador"] : "";
// echo $contador;

 ?>
