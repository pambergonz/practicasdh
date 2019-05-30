<?php require_once("../db-products.php");
$title = "Detalle del producto";
require_once("partials/head.php");

$idEnGet= $_GET["id"];
$productoEncontrado = $_GET["id"]-1;
?>

<?php if ($idEnGet < count($productsList)) : ?>
<article class="product">
  <div class="photo-container">
    <img class="photo" src="images/<?=$productsList[$productoEncontrado]["image"]?>">
    <img class="special" src="images/img-nuevo.png" alt="plato nuevo">
    <a class="zoom" href="#">Ampliar foto</a>
  </div>
  <h2><?=$productsList[$productoEncontrado]["title"]?></h2>
  <p><?=substr($productsList[$productoEncontrado]["description"], 0, 50)?></p>
  <a class="more" href="detalle-producto.php?id=<?=$productsList[$productoEncontrado]['id']?>">ver más</a>
  <?php for ($i = 1; $i <= $productsList[$productoEncontrado]['ranking']; $i++): ?>
      <i class="fa fa-star"> </i>
  <?php endfor;?>
<?php else : ?>
<p>producto inexsistente</p>
<?php endif; ?>
</article>
