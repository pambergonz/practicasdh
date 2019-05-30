<?php require_once("../db-products.php");
$title = "Responsive Web Design";
require_once("partials/head.php");
?>


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
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
				<?php foreach ($productsList as $oneProduct) : ?>
					<article class="product">
						<div class="photo-container">
							<img class="photo" src="images/<?=$oneProduct["image"]?>">
							<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
							<a class="zoom" href="#">Ampliar foto</a>
						</div>
						<h2><?=$oneProduct["title"]?></h2>
						<p><?=substr($oneProduct["description"], 0, 50)?></p>
						<a class="more" href="detalle-producto.php?id=<?=$oneProduct['id']?>" >ver más</a>
						<?php for ($i = 1; $i <= $oneProduct['ranking']; $i++): ?>
							<i class="fa fa-star"> </i>
						<?php endfor;?>
					</article>
				<?php endforeach;?>
			


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
