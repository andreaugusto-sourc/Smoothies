<?php
require_once 'CRUD/crud.php';
$resultado - exibirProd($conexao);
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
        <img src = "<?=$produto['imgProd']?>" alt ="não achamos essa delícia, de um refresh!!">
        </div>
        <div id="produto">
            <div class="canto">
                <img class="bottom" src="images/smoothies6.png">
            </div>
            <div class="canto">
                <img class="bottom" src="images/produtos/casa1.png">
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
            <p id="setiver">Se tiver cupons, adicione ao colocar no carrinho!</p>   
            </div>  
        </div>
    <div id="sobresorvete">
        <p><?=$produto['$descProd']?></p>
    </div>
    </div>
 </div>
 <?php include 'footer.php'?>
</div>
</body>
</html>