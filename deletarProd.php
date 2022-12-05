<?php
session_start();
if(!isset($_SESSION['adm'])) {
    die("Tu não tem permissão administradora! <br> <a href='loginAdm.php'>Faça o login</a>"); 
}
require_once 'CRUD/crud.php';
$idProd = $_GET['idProd'];

$resultado = deletarProd($conexao,$idProd);
if($resultado){
    echo "Delicia deletado!!";
}else{
    echo "Opa...Delicia não deletada";
}
?>