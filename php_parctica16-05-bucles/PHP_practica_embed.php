<?php
$nombre = "Juan";
$sorteo = rand(0,1);
$webs = ["Google","Facebook","Twitter"];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?=$nombre?></h2>
    <h3>¿Es usted un ganador?</h3>
    <?php if($sorteo == 1) : ?>
      SI
    <?php else: ?>
      NO
    <?php endif; ?>


    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($webs as $web): ?>
        <li><a href="https://<?=$web?>.com"><?=$web?></a></li>
      <?php endforeach; ?>
    </ul>

    <hr>



  </body>
</html>
