<?php
session_start();
require_once 'CRUD/crud.php';

$_SESSION['carrinho-vazio'] = "Carrinho vazio...";
$frete = 0;
$subtotal = 0;
$total = 0;


?>


<div id="carrinho">
     <?php if (isset($_SESSION['carrinho'])) { ?>
   
        
         <?php foreach($_SESSION['carrinho'] as $chave => $valor ) { 
             $frete = 12.00;
             $subtotal += $valor['quantidade'] * $valor['preco'];
             $total = $frete + $subtotal;?>
     
          <div class="item-carrinho">
              <p><img src="imagesUp/<?= $valor['imagem'] ?> " class="imagem-item"></p>
              <p id="nome-item"><?= $valor['nome'] ?> </p>
              <p>R$ <?= number_format($valor['quantidade'] * $valor['preco'],2,',','.') ?></p>
              <p> <?= $valor['quantidade'] ?> </p>
              <a href="adicionarCarrinho.php?adicionarUm=<?= $valor['id'] ?>">+</a>
              <a href="adicionarcarrinho.php?removerUm=<?= $valor['id'] ?>">-</a>
              <a href="deletarCarrinho.php?deletarProd=<?= $valor['id'] ?>">Deletar</a>  
      
        </div>
    <?php  }  } if(isset($valor['nome']) == false) {
    echo $_SESSION['carrinho-vazio'];

}

    ?>

    
        
     </div>

    
        
