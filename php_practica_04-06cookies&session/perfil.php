<?php
require_once("registerController.php");
require_once("partials/head.php");
session_start();

if (isset($_SESSION["name"])) {
echo "hola " . $_SESSION['name'] . "!!!!!!Gracias por ser parte de Digicom!!";
}

echo "<pre>";
var_dump($_POST);
echo "<pre>";
echo "<pre>";
var_dump($_SESSION);
echo "<pre>";



?>

  <!-- si preguno si session tiene algo adentro-->
<?php /*if (session_start()): */ ?>

<?php if ($_SESSION == TRUE): ?>
  <a href="logout.php">deslogueate</a>
<?php endif; ?>
