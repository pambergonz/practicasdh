<?php

$products = [
  [
    "id" => 1,
    "titulo" => "aa Lorem Ipsum",
    "descripcion" => "aa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
    "precio" => 300,
    "imagen" => "images/img-pdto-1.jpg",
    "enOferta" => true,
    "valoracion" => 1,
  ],
  [
    "id" => 2,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
    "precio" => 500,
    "imagen" => "images/img-pdto-2.jpg",
    "enOferta" => false,
    "valoracion" => 3,
  ],
  [
    "id" => 3,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
    "precio" => 500,
    "imagen" => "images/img-pdto-3.jpg",
    "enOferta" => false,
    "valoracion" => 2,
  ],
  [
    "id" => 4,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
    "precio" => 300,
    "imagen" => "images/img-pdto-1.jpg",
    "enOferta" => true,
    "valoracion" => 5,
  ],
  [
    "id" => 5,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
    "precio" => 500,
    "imagen" => "images/img-pdto-2.jpg",
    "enOferta" => true,
    "valoracion" => 5,
  ],
  [
    "id" => 6,
    "titulo" => "Lorem Ipsum",
    "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
    "precio" => 500,
    "imagen" => "images/img-pdto-3.jpg",
    "enOferta" => false,
    "valoracion" => 2,
  ],
];

echo "<pre>";
var_dump($products);
echo "</pre>";

$navLinks = [

"home" =>"www.home.com",
"nosotros" =>"www.home.com",
"contacto" =>"www.home.com",
"fotos" =>"www.home.com",
"talleres" =>"www.home.com",
"taller" =>"www.home.com",
"foto" =>"www.home.com",
"visitas" =>"www.home.com"
];

 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>


    <nav class="main-nav">
      <ul>
        <?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
          <li><a href="<?=$linkUrl?>"> <?=$linkTxt?> </a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
    <section class="vip-products">

    <?php foreach ($products as $product => $info): ?>

			<article class="product">
				<div class="photo-container">
					<img class="photo" src="<?=$info["imagen"]?>" alt="pdto 01">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?=$info["titulo"]?></h2>
				<p><?=$info["descripcion"]?></p>
				<a class="more" href="#">ver más</a>
        <h3>precio:<?=$info["precio"]?></h3>
        <?="valoracion:" .$info["valoracion"] ." puntos<br>"?>
        <?php if($info["enOferta"] == true) : ?>
          <?="HOY en efectivo 50% OFF"; ?>
        <?php endif; ?>
			</article>
    <?php endforeach; ?>
    </section>


		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
