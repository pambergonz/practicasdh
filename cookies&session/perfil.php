<?php
require_once("registerController.php");
require_once("partials/head.php");
session_start();

echo "hola " . $_SESSION['name'] . "!!!!!!";





?>
