<?php

function separador() {
echo "<hr> <hr>";
}


$persona = [
 "nombre" => "John",
 "apellido" => "Snow",
 "edad" => 27,
 "hobbies" => ["netflix", "futbol", "programar"]
];

$persona["edad"] = 25;
$persona["direccion"] = "Wintefell";
$persona["hobbies"][]= "nadar";

var_dump($persona);

separador();


$numero1 = 20;
$numero2= 40;

if ($numero1 > $numero2) {
  echo "el numero uno es mas grande";
} else {
  echo "el numero dos es el mas grande" . "<br>";
  }

separador();

$numero = rand(1,5);
if ($numero >= 3 && $numero <= 5 ){
  echo "$numero" . "<br>";
} if ($numero == 3 ) {
  echo "el numero es tres" ."<br>";
} else {
  echo "el nro no es tres" ."<br>";
}

separador();

$numeronuevo = 50;

echo $numeronuevo > 50 ? "el numero es mayor a 50" : "el numero no es mayo a 50" ;

separador();

$edad = 17;
$sexo = "otro";
$casado = "";

if ($edad > 18 && !$casado) {
  echo "bienvenido";
}
elseif ($sexo =="otro") {
  echo "bienvenido";
}

separador();

$usuario = "admn";
$contra = "124";

if ($usuario == "admin" && $contra == "1234"){
  echo "bienvenido";
} elseif ($usuario == "admin" && $contra != "1234") {
   echo "la contrasena e incorrecta";
} elseif ($contra == "1234" && $usuario != "admin") {
    echo "el usario es incorecto";
} else {
  echo "ërror en login";
}

separador();

$cantidadAlumnos = 1;

if ($cantidadAlumnos){
   echo "true";
} else {
  echo "false";
}

separador();

$numero_= 3;

echo $numero_ % 2 == 0 ? "el nro  $numero_ es par" :"el nro $numero_, no es par";

separador();

$nota = 131;

switch ($nota) {
  case $nota < 4:
    echo"desaprobado";
    break;
  case $nota == 4 || $nota == 5 :
    echo"zafamos";
    break;
  case $nota == 9:
      echo "muyy bienn!";
    break;
  case $nota > 5 && $nota <= 8:
    echo "bienn!";
    break;
  case $nota == 10:
    echo "excceleenteee!";
    break;
  default:
  echo "el nro no es valido";
    break;
}

echo "24";





?>
