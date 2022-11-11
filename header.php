<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script defear src="smoothies.js"></script>
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
            <a href="smoothiequemsomos.html" class="externos">Sobre a Loja</a>
            <a href="dashboard.html"  class="externos">Dashboard</a>
            <a href="smoothiequemsomos.html" class="externos">Quem somos nós?</a>
            <a href="cliente.html"  class="externos">Cadastro</a>
        </div>`
</header>

