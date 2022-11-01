<?php
function addProd($conexao,$nomeProd,$descProd,$precoProd,$imgProd,$idCat){
    $comando = "INSERT INTO produto (nomeProd,descProd,precoProd,imgProd,idCat) values ('$nomeProd','$descProd','$precoProd','$imgProd','$idCat')";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirProds($conexao){
    $comando ="SELECT * FROM  produto";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirProd($conexao, $idProd){
    $comando ="SELECT * FROM produto where idProd ='$idProd'";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}

?>