<?php

function addCat($conexao,$nomeCat){
    $comando = "INSERT INTO categoria (nomeCat) values ('$nomeCat')";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirCats($conexao){
    $comando = "SELECT * FROM categoria";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
?>