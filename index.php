<?php
require_once 'CRUD/crud.php';
session_start();

if(isset($_GET['pesquisa'])) {
    $pesquisa = $_GET['pesquisa'];
    $comando = "SELECT * FROM produto where nomeProd like '%$pesquisa%'";
    $resultado = mysqli_query($conexao, $comando);
}else{
    $resultado = exibirProds($conexao);
}
?>
<head>
    <title>Smoothies</title>
</head>
<body>
    <div class = "site">
    <?php include 'header.php' ?>
    <video autoplay loop muted src="images/propaganda.mp4" id="propaganda"></video>
    <div id= "miolo">
        <?php while($produto = mysqli_fetch_assoc($resultado)):?>
            <div id="produtosindex">
            <p class ="produtos">
                    <a href="exibirProd.php?idProd=<?= $produto['idProd']?>" ><img src="imagesUp/<?= $produto['imgProd']?>"  class = "sorvetes"  alt="não achamos o sorvete, de um refresh!" 
                    onmouseover="this.src = 'images/transition.png';"
                    onmouseout="this.src = 'imagesUp/<?= $produto['imgProd']?>';"></a> 
                    
            </p>


                <div class="caixas">
                    <a href="exibirProd.php?idProd=<?= $produto['idProd']?>"  class="product"><?= $produto['nomeProd']?></a>
                    <p class="preco"><?= $produto['precoProd']?></p>
                </div>
            </div>

        <?php endwhile ?>
</div>
    <?php include 'footer.php'?>
    </div>
</body>