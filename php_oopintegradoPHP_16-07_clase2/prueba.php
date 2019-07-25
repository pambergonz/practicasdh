<?php
require_once('cuenta.php');
require_once('persona.php');
require_once('classic.php');
require_once('gold.php');


$cuenta1 = new Classic();
$cuenta1->debitar(7000,"banelco");
$cuenta1->setUltimoMovimiento("10-02-2019");

echo"<pre>";
var_dump($cuenta1);
echo"</pre>";

$cuenta2 = new Gold();
$cuenta2->setUltimoMovimiento("10-02-2019");
$cuenta2-> debitar(7000,"banelco");
echo"<pre>";
var_dump($cuenta2);
echo"</pre>";



 ?>
