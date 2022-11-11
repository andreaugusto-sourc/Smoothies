<?php
require_once 'CRUD/crud.php';
$resultado = exibirProds($conexao);

if(isset($_GET['pesquisa'])) {
    $busca = $_GET['pesquisa'];

$comando = "SELECT * FROM produto where nomeProd like '$busca'";
$resultado = mysqli_query($conexao, $comando);
}
?>
<head>
    <title>Smoothies</title>
</head>
<body>
    <div class = "site">
    <?php include 'header.php' ?>
    <div id= "miolo">
        <?php while($produto = mysqli_fetch_assoc($resultado)):?>
            <div>
            <p class ="produtos">
                    <a href="exibirProd.php?idProd=<?= $produto['idProd']?>" ><img src="imagesUp/<?= $produto['imgProd']?>"  class = "sorvetes"  alt="não achamos o sorvete, de um refresh!" 
                    onmouseover="this.src = 'images/transition.png';"
                    onmouseout="this.src = 'imagesUp/<?= $produto['imgProd']?>';"></a> 
                    
            </p>


                <div class="caixas">
                    <a href="smoothielaranja.html"  class="product"><?= $produto['nomeProd']?></a>
                    <p class="preco"><?= $produto['precoProd']?></p>
                </div>
            </div>

        <?php endwhile ?>
</div>
    <?php include 'footer.php'?>
    </div>
</body>