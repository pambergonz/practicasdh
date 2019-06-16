<?php
require_once("partials/head.php");
require_once("registerController.php");

session_start();
session_destroy();
header("location:home.php");



 ?>
