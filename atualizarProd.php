<?php
session_start();
require_once 'CRUD/crud.php';

if(!isset($_SESSION['adm'])) {
    die("Tu não tem permissão administradora! <br> <a href='loginAdm.php'>Faça o login</a>"); 
}

$idProd = $_POST['idProd'];
$novoNome = $_POST['nomeProd'];
$novaDesc = $_POST['descProd'];
$novoPreco = $_POST['precoProd'];

$novaImg = moverImg("imgProd");

$novoIdCat= $_POST["idCat"];
$novoIdCat = preg_replace("/[A-Za-z\-]+/","",$novoIdCat);

$resultado = atualizarProd($conexao,$idProd,$novoNome,$novaDesc,$novoPreco,$novaImg,$novoIdCat);

if ($resultado) {
    echo "<br>Produto atualizado";
}else{
    echo "<br>Produto não atualizado!";
}
?>