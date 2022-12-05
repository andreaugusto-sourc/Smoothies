<?php
session_start();
require_once 'CRUD/crud.php';
$subtotal = 0;
if(!isset($_SESSION['usuario'])) {
    die("Realize primeiro o cadastro para acessar o carrinho de compras <br>
    <a href='cadastroUsu.php'>Cadastro</a>"); 
}
?>
<div class="site">
    <?php include 'header.php' ?>
    <div id="miolo">


        <div id="dash">
            <?php if (isset($_SESSION['carrinho'])) { ?>


            <?php foreach($_SESSION['carrinho'] as $chave => $valor ) { 
                        $frete = 12.00;
                        $subtotal += $valor['quantidade'] * $valor['preco'];
                        $total = $frete + $subtotal;?>

            <div class="flexbox2">
                <a><img src="imagesUp/<?= $valor['imagem'] ?> " class="imagem-item"></a>
                <a <?= $valor['nome'] ?> </a>
                    <a>R$ <?= number_format($valor['quantidade'] * $valor['preco'],2,',','.') ?></a>
                    <a> <?= $valor['quantidade'] ?> </a>
                    <a href="funcoesCarrinho.php?adicionarUm=<?= $valor['id'] ?>">+</a>
                    <a href="funcoesCarrinho.php?removerUm=<?= $valor['id'] ?>">-</a>
                    <a href="deletarCarrinho.php?deletarProd=<?= $valor['id'] ?>">Deletar</a>
            </div>
            <?php  }  } if(isset($valor['nome']) == false) {
                echo "Carrinho vazio...";

            }?>

        </div>

        <div>
            <p>Frete: R$<?= $frete?></p>
            <p>Subtotal: R$<?= $subtotal?></p>
            <p>Total: R$<?= $total?></p>

        </div>

    </div>
    <?php include 'footer.php' ?>
</div>