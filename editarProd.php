<?php
require_once 'CRUD/crud.php';
$idProd = $_GET['idProd'];
$resultado = exibirCats($conexao);
$resultado2 = exibirProd($conexao,$idProd);
$produto = mysqli_fetch_assoc($resultado2);
?>
<head>
<title>Editar Produto</title>
</head>
<body>

<div class = "site">
<?php include 'header.php' ?>
<div id="dashboard">
    <div id="pagina">
        <div id="infocanto">
            <h1>Alteração</h1></a>
            <a href="cadastroProd.php" class="informacoes"><p>novo produto</p></a>
            <a href="listaProd.php" class="informacoes"><p>todos os produtos</p></a>
            <h1>Relatório</h1>
            <a href="" class="informacoes"><p>relatório 1</p></a>
            <a href="" class="informacoes"><p>relatório 2</p></a>
            <a href="" class="informacoes"><p>relatório 3</p></a>
        </div>       
    </div>

    <div id="relatorio">

<h1 id="productscadastro">Cadastrar novos produtos</h1>
<div id="cadastrodeproduto">
<form action="atualizarProd.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="idProd" value="<?= $produto['idProd']?>">
<input type="hidden" value="<?= $produto['idProd']?>">    
<label for = "nomeProd" class="desc">
    Nome:
</label>
<input type="text" value="<?= $produto['nomeProd']?>" name="nomeProd" id="nomeProd" class="botaocadastrar">

<label for = "descProd" class="desc">
    Descrição:
</label>
<input type="text" value="<?= $produto['descProd']?>" name="descProd" id="descProd" class="botaocadastrar">

<label for="precoProd" class="desc">
    Preco:
</label>
<input type="number" value="<?= $produto['precoProd']?>" name="precoProd" id="precoProd" class="botaocadastrar">

<label for = "imgProd" class="desc">
    Imagem:
</label>
<input type="file" value="<?= $produto['imgProd']?> name="imgProd" id="imgProd"  class="botaocadastrar">


<h2 class="desc">Categoria:</h2>

<select name="idCat" value="<?= $produto['idCat']?>" class="botaocadastrar">
<?php while ($cat = mysqli_fetch_assoc($resultado)){
    echo "<option>" . $cat['idCat'] . "-" . $cat['nomeCat'] . 
    "</option>";
}
?>

</select>
<button id="botaocadastro" class="botaocadastrar">Cadastrar</button>
</form>
</div>
</div> 
    

</div>
<?php include 'footer.php'?>
</div>
</body>


