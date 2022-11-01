<?php
require_once 'CRUD/crud.php';
$resultado = exibirCats($conexao);
?>
<head>
<title>Cadastro Produto</title>
</head>
<body>
<div class = "site">
<?php include 'header.php' ?>
</div>
<div class = "site">
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
<form action="salvarProd.php" method="post" enctype="multipart/form-data">
<label for = "nomeProd" class="desc">
    Nome:
   
</label>
<input type="text" name="nomeProd" id="nomeProd" class="botaocadastrar">
<label for = "descProd" class="desc">
    Descrição:

</label>
<input type="text" name="descProd" id="descProd" class="botaocadastrar">
<label for = "precoProd" class="desc">
    Preco:

</label>
<input type="number" name="precoProd" id="precoProd" class="botaocadastrar">
<label for = "imgProd" class="desc">
    Imagem:

</label>

<input type="file" name="imgProd" id="imgProd"  class="botaocadastrar">
<br>
<h2 class="desc">Categoria:</h2>

<select name="idCat">
<?php while ($cat = mysqli_fetch_assoc($resultado)){
    echo "<option>" . $cat['idCat'] . "-" . $cat['nomeCat'] . 
    "</option>";
}
?>

</select>
<button id="botaocadastro">Cadastrar</button>
</form>
</div>
</div>  
</div>
</div>
</body>
<?php include 'footer.php'?>

