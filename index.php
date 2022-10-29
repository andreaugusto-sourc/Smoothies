<?php
require_once 'CRUD/crud.php';
$resultado = exibirProds($conexao);
?>
<head>
    <title>Document</title>
</head>
<body>
    <div class = "site">
    <?php include 'header.php' ?>
    <div id= "miolo">
        <?php while($produto = mysqli_fetch_assoc($resultado)):?>
            <div>
            <p class ="produtos">
                    <a href="smoothielaranja.html" ><img src="images/smoothies0.png"  class = "sorvetes"  alt="não achamos o sorvete, de um refresh!" 
                    onmouseover="this.src = 'images/transition.png';"
                    onmouseout="this.src = 'images/<?= $produto['imgProd']?>';"></a> 
                    
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