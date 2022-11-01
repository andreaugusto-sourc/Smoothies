<?php
require_once 'CRUD/crud.php';
$resultado = exibirProds($conexao);
?>
<head>
    <title>Todos os Produtos</title>
</head>
<body>
<table border="1px">
<a href="cadastroProd.php">Adicionar usuário</a>

<tr><th>Nome</th> <th>Exibir</th> <th>Editar</th> <th>Deletar</th> </tr>
<?php while ($registro = mysqli_fetch_assoc($retorno)): ?>  

<tr>
<th width="200px"> <?=$registro['Nome']; ?></th> 
<th width="70px"><a href="exibirUsuario.php?idUsuario=<?=$registro['idUsuarios'];?>">Exibir</a></th> 
<th width="70px"><a href="editarUsuario.php?idUsuario=<?=$registro['idUsuarios'];?>">Editar</a></th> 
<th width="70px"><a href="deletarUsuario.php?idUsuario=<?=$registro['idUsuarios'];?>">Deletar</a></th>  
</tr>

<?php endwhile ?> 
</table>
</body>
</html>