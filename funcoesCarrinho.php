<?php
session_start();
require_once 'CRUD/crud.php';

if(isset($_GET['adicionarUm'])) {
    $idProd = $_GET['adicionarUm'];
    $_SESSION['carrinho'][$idProd]['quantidade']++;
    echo "+1";
    header("Location: http://localhost/smoothies/carrinho.php");

}
else if(isset($_GET['addCarrinho'])) {
    $idProd = (int) $_GET['addCarrinho'];
    if(isset($_SESSION['carrinho'][$idProd])) {
        $_SESSION['carrinho'][$idProd]['quantidade']++;
          header("Location: http://localhost/smoothies/exibirProd.php?idProd=$idProd");
    }
    else{
    $idProduto = $idProd;
    $resultado = exibirProd($conexao, $idProduto);
    $produto = mysqli_fetch_assoc($resultado);
    $_SESSION['carrinho'][$idProd] = array('id' => $idProd,'quantidade' => 1, 'nome' => $produto['nomeProd'], 'preco' => $produto['precoProd'], 'imagem' => $produto['imgProd']);
    header("Location: http://localhost/smoothies/exibirProd.php?idProd=$idProduto");
    }
}else if(isset($_GET['removerUm'])){
    $idProd = $_GET['removerUm'];
    $_SESSION['carrinho'][$idProd]['quantidade']--;
    echo "-1";
    header("Location: http://localhost/smoothies/carrinho.php");
}else{
    echo "Tu não pode adicionar ao carrinho um produto que não existe!";
}

?>