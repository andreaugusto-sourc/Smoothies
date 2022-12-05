
<?php
require_once 'CRUD/crud.php';
session_start();
$resultado = exibirProds($conexao);

if(!isset($_SESSION['adm'])){
    die("Tu não tem permissão administradora! <br> <a href='loginAdm.php'>Faça o login</a>"); 
}
?>
<head>
<title>Dashboard</title>
</head>
<?php include 'header.php'?>

<div class="site">

<div id="miolo">
<ul id="dash">
<?php while($produto = mysqli_fetch_assoc($resultado)):?>
<li class="flexbox2">
<a><?= $produto['nomeProd']?></a>
<a href="deletarProd.php?idProd=<?= $produto['idProd']?>">Deletar<a>
<a href="editarProd.php?idProd=<?= $produto['idProd']?>">Editar<a>
</li>
<?php endwhile ?>
</ul>

</div>


</div>

<?php include 'footer.php'?>