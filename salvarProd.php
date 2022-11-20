<?php
require_once 'CRUD/crud.php';

$nomeProd = $_POST['nomeProd'];
$descProd = $_POST['descProd'];
$precoProd = $_POST['precoProd'];

$imgProd = moverImg("imgProd","imagesUp");
$idCat = $_POST["idCat"];
$idCat = preg_replace("/[A-Za-z\-]+/","",$idCat);

$resultado = addProd($conexao,$nomeProd,$descProd,$precoProd,$imgProd,$idCat);

if($resultado){
    echo "Sucesso!";
}else{
    echo "Erro";
}

header("Location: index.php");
?>