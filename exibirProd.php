<?php
require_once 'CRUD/crud.php';
$idProd = $_GET['idProd'];
$resultado = exibirProd($conexao,$idProd);
$produto = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $produto['nomeProd']?></title>
</head>
<body>
<div class = "site">
<?php include 'header.php' ?>

<div id="centro">
    <div id="smoothie">
        <h1 id="orange"><?= $produto['nomeProd']?></h1>
        </div>
    <div id="produto1">
    <div id="produtos">
        <div id="principal2">
        <img src = "imagesUp/<?=$produto['imgProd']?>" class ="imgPrincipal" alt ="não achamos essa delícia, de um refresh!!">
        </div>
        <div id="produto">
            <div class="canto">
                <img class="bottom" src="imagesUp/<?=$produto['imgProd']?>">
            </div>
            <div class="canto">
                <img class="bottom" src="imagesUp/<?=$produto['imgProd']?>">
            </div>
        </div>
    </div>
    <div id="comprar">
        <div id="paraborder">
        <h1 id="titulo"><?= $produto['nomeProd']?></h1>
        </div>
        <p id="avaliacao">Avaliação: ⭐⭐⭐⭐⭐</p>
        <div id="fazercompra">
            <h2>Fazer sua Compra</h2>
            <div id="buy">
            <button id="comprarproduto">Comprar</button>   
            <a href="adicionarCarrinho.php?addCarrinho=<?=$produto['idProd']?>">Add carrinho</a>
            <p id="setiver">Se tiver cupons, adicione ao colocar no carrinho!</p>   
            </div>  
        </div>
    <div id="sobresorvete">
        <p><?=$produto['descProd']?></p>
    </div>
    </div>
 </div>
 <?php include 'footer.php'?>
</div>
</body>
</html>