<?php
session_start();
require_once 'CRUD/crud.php';
$usuario = $_POST['usuario'];

$senha = $_POST['senha'];

$resultado = loginAdm($conexao,$usuario,$senha);

if ($resultado){
    echo "Adm logado!";
    $_SESSION['adm'] = "adm";
}else{
    echo "Informações incorretas";
}
?>