<?php
session_start();

if(!isset($_SESSION['adm'])) {
    die("Tu não tem permissão administradora! <br> <a href='loginAdm.php'>Faça o login</a>"); 
}


    require_once "CRUD/crud.php";
    
    $nome = $_POST['nomeCat'];
    
    $resultado = addCat($conexao,$nome);
    
    if($resultado){
        echo "Sucesso!";
    }else{
        echo "Erro";
    }

?>