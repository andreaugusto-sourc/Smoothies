<?php
function addUsu($conexao,$nomeUsu,$senhaUsu,$cpfUsu,$emailUsu){
    $comando = "INSERT INTO usuario (nomeUsu,senhaUsu,cpfUsu,emailUsu) values ('$nomeUsu','$senhaUsu','$cpfUsu','$emailUsu')";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirUsus($conexao){
    $comando ="SELECT * FROM  usuario";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirUsu($conexao,$idProd){
    $comando ="SELECT * FROM usuario where idUsu ='$idUsu'";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function deletarUsu($conexao,$idUsu) {
    $comando = "DELETE FROM usuario where idUsu = '$idUsu'";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function atualizarUsu($conexao,$idUsu,$novoNome,$novaSenha,$novoCfp,$novaEmail) {
    $comando = "UPDATE usuario SET nomeUsu = '$novoNome', senhaUsu = '$novaSenha', cpfUsu = '$novoCfp', emailUsu = '$novaEmail' where idUsu = '$idUsu' ";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function loginAdm($conexao,$usuario,$senha) {
    $comando = "SELECT * from usuario where nomeUsu = 'admin'";
    $resultado = mysqli_query($conexao,$comando);

    $produto = mysqli_fetch_assoc($resultado);
    if ($usuario == $produto['nomeUsu'] && $senha == $produto['senhaUsu']) {
        return true;
    }
}

?>