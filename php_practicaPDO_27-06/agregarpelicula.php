<?php
	require_once 'connection.php';
	require_once 'functions.php';
	$title = 'Crear una película';
	require_once 'partials/head.php';
	debug($_POST);

	$statement = $moviesDbConnection->prepare("
  SELECT distinct genres.name, genres.id FROM genres
	ORDER BY name ASC
  ");
  $statement ->execute();
  $genres = $statement ->fetchall(PDO::FETCH_ASSOC);
	var_dump($genres);
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

	<label> Nueva versión:
		<input type="text" name="updated_at">
	</label>

	<select name="genre_id">
		<?php foreach ($genres as $genre): ?>
			<option value="<?=$genre["id"]?>"><?=$genre["name"]?></option>
		<?php endforeach; ?>
	</select>



	<input type="submit" >
	<?php debug($_POST);exit?>

</form>
