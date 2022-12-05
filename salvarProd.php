<?php
session_start();
require_once 'CRUD/crud.php';
if(!isset($_SESSION['adm'])) {
    die("Tu não tem permissão administradora! <br> <a href='loginAdm.php'>Faça o login</a>"); 
}
    $nomeProd = $_POST['nomeProd'];
    $descProd = $_POST['descProd'];
    $precoProd = $_POST['precoProd'];

    $imgProd = moverImg("imgProd");

    $idCat = preg_replace("/[A-Za-z\-]+/","",$_POST["idCat"]);

    $resultado = addProd($conexao,$nomeProd,$descProd,$precoProd,$imgProd,$idCat);

if($resultado){
    echo "Sucesso!";
}else{
    echo "Erro";
}





?>