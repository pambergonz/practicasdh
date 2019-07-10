


<?php
session_start();

if($_POST){
  if(isset($_POST["resetear"])){
  $_SESSION["colorPreferido"] = "white"; 
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style>

    .link {
      display:inline-block;
      padding:8px;
      text-decoration:none;
      background-color:rgba(0,0,0,0.8);
      color:white;
      margin-top: 8px;
    }
    

  </style>
</head>
<body style="background-color:<?= $_SESSION["colorPreferido"]?>">
<?php if(isset($_SESSION["nombre"])) : ?>
  <h1>Te damos la bienvenida <?= $_SESSION["nombre"]?>  </h1>
<?php else : ?>
  <h1>Te damos la bienvenida invitado </h1>
<?php endif ;?>

 

  <form action="" method="post">
    <input type="submit" name="resetear" value="Resetear colo de fondo">
  </form>

<a href="home.php" class="link">VOLVER...</a>

</body>
</html>
