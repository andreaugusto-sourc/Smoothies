<?php

require_once 'CRUD/crud.php';

$idProd = $_POST['idProd'];
$novoNome = $_POST['nomeProd'];
$novaDesc = $_POST['descProd'];
$novoPreco = $_POST['precoProd'];




$novaImg = moverImg("imgProd");

$novoIdCat= $_POST["idCat"];
$novoIdCat = preg_replace("/[A-Za-z\-]+/","",$novoIdCat);

$resultado = atualizarProd($conexao,$idProd,$novoNome,$novaDesc,$novoPreco,$novaImg,$novoIdCat);

if ($resultado) {
    echo "Produto atualizado";
}else{
    echo "Produto não atualizado";
}
?>