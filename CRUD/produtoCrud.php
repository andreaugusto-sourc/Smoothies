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
function exibirProd($conexao,$idProd){
    $comando ="SELECT * FROM produto where idProd ='$idProd'";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function deletarProd ($conexao,$idProd) {
    $comando = "DELETE FROM produto where idProd = '$idProd'";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function atualizarProd ($conexao,$idProd,$novoNome,$novaDesc,$novoPreco,$novaImg,$novoIdCat) {
    $comando = "UPDATE produto SET nomeProd = '$novoNome', descProd = '$novaDesc', precoProd = '$novoPreco', imgProd = '$novaImg', idCat = '$novoIdCat' where idProd = '$idProd' ";
    $resultado = mysqli_query($conexao,$comando);
    $resultado;
}

?>