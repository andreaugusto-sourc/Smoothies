<?php
session_start();
require_once 'CRUD/crud.php';
$nomeUsu = $_POST['nomeUsu'];

$senhaUsu = $_POST['senhaUsu'];

$cpfUsu = $_POST['cpfUsu'];

$emailUsu = $_POST['emailUsu'];

$erro = false;

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

if(strlen($nomeUsu) > 8) {
   $erro = "Nome de usuário muito longo!";
}
if(strlen($cpfUsu) > 11) {
    $erro ="CPF inválido!";
}

if(strlen($senhaUsu) > 8) {
    $erro = "Senha de usuário muito longa!";
}

if ( $erro ) {
	die($erro) ;
}


$resultado = addUsu($conexao,$nomeUsu,$senhaUsu,$cpfUsu,$emailUsu);
if($resultado) {
    echo "Sucesso no cadastro!";
    $_SESSION['usuario'] = $cpfUsu;
  
}else{
    echo "Erro no cadastro, revise as informações";
}


?>