<?php
	require_once 'connection.php';
	require_once 'functions.php';
	$title = 'Crear una película';
	require_once 'partials/head.php';
	debug($_POST);
?>

<form action="guardarpelicula.php" method="post">
	<label>titulo:
		<input type="text" name="movieTitle">
	</label>


	<label>creada:
		<input type="text" name="created">
	</label>


	<label>lanzada
		<input type="text" name="release_date">
	</label>


	<label>rating:
		<input type="text" name="rating">
	</label>


	<label>premios:
		<input type="text" name="awards">
	</label>


	<label>duración:
		<input type="text" name="length">
	</label>


	<label>género:
		<input type="text" name="genero">
	</label>


	<label> Nueva versión:
		<input type="text" name="updated_at">
	</label>



	<input type="submit" >
</form>
