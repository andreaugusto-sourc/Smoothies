<?php
session_start();
require_once 'CRUD/crud.php';

if(!isset($_SESSION['adm'])) {
    die("Tu não tem permissão administradora! <br> <a href='loginAdm.php'>Faça o login</a>"); 
}
    $erro = false;
    $nomeProd = $_POST['nomeProd'];
    $descProd = $_POST['descProd'];
    $precoProd = $_POST['precoProd'];

    $imgProd = moverImg("imgProd");

    $idCat = preg_replace("/[A-Za-z\-]+/","",$_POST["idCat"]);

    if(!isset($_POST) && empty($_POST)) {
        $erro = 'Nada foi postado';
    }
    
    foreach($_POST as $chave => $valor) {
        // Remove todas as tags HTML
        // Remove os espaços em branco do valor
        $$chave = trim( strip_tags( $valor ) );
        
        // Verifica se tem algum valor nulo
        if ( empty ( $valor ) ) {
            $erro = 'Existem campos em branco.';
        }
    }
    
    if(strlen($nomeProd) > 20) {
       $erro = "Nome do produto muito longo!";
    }

    
    if ( $erro ) {
        die($erro) ;
    }

    $resultado = addProd($conexao,$nomeProd,$descProd,$precoProd,$imgProd,$idCat);

if($resultado){
    echo "Sucesso!";
}else{
    echo "Erro na inserção";
}





?>