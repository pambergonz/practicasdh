<?php
require_once("registerController.php");
require_once("head.php");
session_start();

echo "hola " . $_SESSION['name'] . "!!!!!!";



?>
