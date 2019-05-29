<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php

function separador($ejercicio){
  echo "<hr><b> $ejercicio</b><hr>";
}
separador(1);

for ($i=1; $i <=10 ; $i++) {
  echo "2 por $i es igual a: ". $i * 2 . "<br>";
}

separador(2);

for ($i=100; $i >= 85 ; $i--) {
  echo "$i <br>";
}

separador(3);

$contador = 1;
while ($contador <= 5 ){
  echo $contador * 2 . "<br>";
  $contador++;
}

separador(4);

$cantidadCara = 0;
$cantidadVueltas = 0;

while ($cantidadCara < 5) {
  $moneda = rand(1,0);
if ($moneda == 1) {
  $cantidadCara++;
}
$cantidadVueltas++;
}

echo "$cantidadVueltas <br>";

separador(5);

$nombres = ["juan","pedro","lucia","pepe"];

echo"<br>for<br>";
for ($i=0; $i <count($nombres) ; $i++) {
  echo $nombres[$i] . "<br>";
}

echo"<br>foreach<br>";

foreach ($nombres as $nombre){
  echo "$nombre <br>" ;
}

echo"<br>while<br>";

$i = 0;
while ($i < count($nombres)) {
  echo $nombres[$i] . "<br>";
  $i++;
}

echo"<br>dowhile<br>";

$i = 0;
do {
  echo "$nombres[$i]" . "<br>";
  $i++;
} while ($i < count($nombres));

separador(6);

$arrayNumeros = [];

for ($i=0; $i < 10 ; $i++) {
  $numeroAleatorio = rand(1,10);
  $arrayNumeros[] += $numeroAleatorio;
}

var_dump($arrayNumeros);

foreach ($arrayNumeros as $numero) {
  echo "$numero <br>";
  if ($numero == 5){
    break;
  }
}
echo "se encontro un 5";

separador(7);

$arrayNumeros = [];

for ($i=0; $i < 10 ; $i++) {
  $numeroAleatorio = rand(1,100);
  $arrayNumeros[] += $numeroAleatorio;
}

var_dump($arrayNumeros);

$numerosPar = 0;
foreach ($arrayNumeros as $numero) {
  if ($numero % 2 == 0) {
    $numerosPar++;
  }
}
echo $numerosPar;

separador(8);

$mascota = [
  "animal" => "gato",
  "edad" => "1 mes",
  "altura" => "30 cm",
  "nombre" => "kitty"
];

foreach ($mascota as $caracteristicas => $valor) {
  echo "$caracteristicas : $valor <br>";
}

separador(9);

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=>"Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin","Holanda" => "Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw");

foreach ($ceu as $pais => $capital) {
  echo "El país es:$pais y su capital es:$capital<br>";
}

separador(10);

$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];


foreach ($ceu as $pais => $ciudades) {
  echo "<br> Las ciudades de $pais son: ";
  foreach ($ciudades as $ciudad) {
    echo "<li> $ciudad </li>";
  }
}

separador(10);

$ceu = [
"Argentina" => [
  "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
  "esAmericano" =>true
],
"Brasil" => [
  "ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  "esAmericano" =>true
],
"Colombia" => [
  "ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
  "esAmericano" => true
],
"Francia" => [
  "ciudades" => ["Paris", "Nantes", "Lyon"],
  "esAmericano" => false
],
"Italia" => [
"ciudades" => ["Roma", "Milan", "Venecia"],
"esAmericano" => false
],

"Alemania" => [
  "ciudades" => ["Munich", "Berlin", "Frankfurt"],
  "esAmericano" => false
],
];


foreach ($ceu as $pais => $dataDelPais) {
  if ($dataDelPais["esAmericano"] == true ) {
    echo "<p>Las ciudades de $pais son:</p>";
    echo "<ul>";
    foreach ($dataDelPais["ciudades"] as $unaCiudad) {
      echo "<li> $unaCiudad </li>";
    }
    echo "</ul>";
  }
}

echo "<pre>";
var_dump($ceu);
echo "<pre>";

 ?>
</body>
</html>
