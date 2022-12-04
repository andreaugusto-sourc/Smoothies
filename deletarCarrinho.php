<?php
session_start();
$idProd = $_GET['deletarProd'];

if(isset($_GET['deletarProd'])) {
    echo "Produto deletado";
    unset($_SESSION['carrinho'][$idProd]);
    sort($_SESSION['carrinho']);
    header("Location: http://localhost/smoothies/carrinho.php");
}

?>