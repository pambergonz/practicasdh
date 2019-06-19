<?php
require_once("partials/head.php");
require_once("registerController.php");

session_destroy();

setcookie("email", $email, time() -1);

header("location:home.php");



 ?>
