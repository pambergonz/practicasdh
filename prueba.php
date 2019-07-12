<?php
declare(strict_types = 1);

require_once("usuario.php");

$usuario1= new Usuario;
$usuario1->setNombre("Pablo");
$usuario1->setMail("pablito@hotmail.com");
$usuario1->setContraseña(123455);

var_dump($usuario1);

$usuario2 = new Usuario;
var_dump($usuario2);



 ?>
