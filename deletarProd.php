<?php
require_once 'CRUD/crud.php';
$idProd = $_GET['idProd'];

$resultado = deletarProd($conexao,$idProd);
if($resultado){
    echo "Delicia deletado!!";
}else{
    echo "Opa...Delicia não deletada";
}
?>