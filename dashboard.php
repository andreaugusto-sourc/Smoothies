
<?php
require_once 'CRUD/crud.php';
$resultado = exibirProds($conexao);
?>
<head>
<title>Dashboard</title>
</head>
<?php include 'header.php'?>

<div class="site">

<ul id="dash">
<?php while($produto = mysqli_fetch_assoc($resultado)):?>
<li>
<a><?= $produto['nomeProd']?></a>
<a href="deletarProd.php?idProd=<?= $produto['idProd']?>">Deletar<a>
<a href="editarProd.php?idProd=<?= $produto['idProd']?>">Editar<a>
</li>
<?php endwhile ?>
</ul>

</div>

<?php include 'footer.php'?>