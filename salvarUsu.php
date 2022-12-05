<?php
session_start();
require_once 'CRUD/crud.php';
$nomeUsu = $_POST['nomeUsu'];

$senhaUsu = $_POST['senhaUsu'];

$cpfUsu = $_POST['cpfUsu'];

$emailUsu = $_POST['emailUsu'];

$resultado = addUsu($conexao,$nomeUsu,$senhaUsu,$cpfUsu,$emailUsu);

if($resultado) {
    echo "Sucesso no cadastro!";
    $_SESSION['usuario'] = $cpfUsu;
    header("Location: http://localhost/smoothies/index.php");
}else{
    echo "Erro no cadastro, revise as informações";
}


?>