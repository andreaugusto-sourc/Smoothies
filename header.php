<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script defear src="smoothies.js"></script>
    <link href='https://css.gg/icecream.css' rel='stylesheet'>
    <link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-36x36.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<header class="header">
<div class = "cabecalho">
            <a href="index.php"><img src = "images/smoothieslogo.png" id= "imagemlogo" alt= "não achamos a imagem"></a>

            <form id="caixas" action="index.php" method= "get">
                <label for="quest"></label>
                <input class= "quest" name="pesquisa" type= "text" placeholder="Pesquisar delicias">

                <button type="submit" id= "button">Pesquisar</button>
            </form>
            <form action ="" method= "post" >
                <button type="submit" id= "carrinho" >
                 <a href="smoothiescarrinho.html"> <i class="gg-shopping-cart"></i><p id= "botao">Carrinho</p></a> 
                </button>
            </form>
            <form action ="" method= "post">
                <button type="submit" id= "perfil">
                 <p id = "conta"> <i class="gg-icecream"><a href="cliente.html"></i>Minha Conta</p></a>
                </button>
            </form>

        </div>
        <div id= "sub">
            <a href="smoothiequemsomos.php" class="externos">Sobre a Loja</a>
            <a href="dashboard.php"  class="externos">Dashboard</a>
            <a href="smoothiequemsomos.php" class="externos">Quem somos nós?</a>
            <a href="cliente.php"  class="externos">Cadastro</a>
        </div>
</header>

