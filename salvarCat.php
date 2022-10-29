<?php
require_once "CRUD/crud.php";

$nome = $_POST['nomeCat'];

echo $nome;

$resultado = addCat($conexao,$nome);
if($resultado){
    echo "Sucesso!";
}else{
    echo "Erro";
}
?>