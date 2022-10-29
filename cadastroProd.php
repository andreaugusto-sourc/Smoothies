<?php
require_once 'CRUD/crud.php';
$resultado = exibirCats($conexao);
?>
<head>
<title>Document</title>
</head>
<body>
<div class = "site">
<?php include 'header.php' ?>

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
<input type="file" name="imgProd" id="imgProd" class="botaocadastrar">

<select name="idCat">
<?php while ($cat = mysqli_fetch_assoc($resultado)){
    echo "<option>" . $cat['idCat'] . "-" . $cat['nomeCat'] . 
    "</option>";
}
?>
</select>
<button id="botaocadastro">Cadastrar</button>

</form>
<?php include 'footer.php'?>
</div>
</body>

