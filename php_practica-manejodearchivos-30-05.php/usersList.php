<?php
require_once("registerController.php");
require_once("partials/head.php");

 ?>


<?php foreach (getAllUsers() as $oneUser): ?>
   <a href="perfil.php?email=<?= $oneUser["email"] ?>"> <?=$oneUser['name']?><br></a>
<?php endforeach; ?>
