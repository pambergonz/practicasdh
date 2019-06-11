<?php
require_once("controller.php");


//var_dump($_GET);


$usersList = json_decode(file_get_contents('usuarios.json'), true);

foreach($usersList as $user) {
  if ($_GET['email'] == $user['email']) {
    foreach ($user as $data => $dataValue) {
      echo "$dataValue <br>";
    }
  }
}

//var_dump($user);

?>
