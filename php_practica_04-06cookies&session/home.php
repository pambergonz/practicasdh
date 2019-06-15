<?php
session_start();
require_once("registerController.php");
require_once("partials/head.php");
 ?>

<?php if ($_SESSION == NULL): ?>
<ul>
  <li><a href="login.php">Iniciar sesión</a></li>
  <li><a href="register.php">Registrate</a></li>
</ul>
<?php endif; ?>
