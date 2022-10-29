<?php 
$conexao = mysqli_connect("localhost","root","","smoothies");

if(!$conexao){
    echo mysqli_connec_error();
}

require_once 'categoriaCrud.php';
require_once 'produtoCrud.php';

?>