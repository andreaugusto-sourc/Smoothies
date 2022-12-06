<?php
session_start();

if(isset($_SESSION['usuario'])) {
    die("Você já está logado!"); 
}
?>
<div class="site">
    <?php include 'header.php'?>
    
    <form action="salvarUsu.php" method="post">
        <label for="nomeUsu" class="salvarUsu">Nome de usuário:</label>
        <input type="text" name="nomeUsu" id="nomeUsu">

        <label for="emailUsu" class="salvarUsu">E-mail de usuário:</label>
        <input type="email" name="emailUsu" id="emailUsu">

        <label for="senhaUsu" class="salvarUsu">Senha de usuário:</label>
        <input type="password" name="senhaUsu" id="senhaUsu">

        <label for="cpfUsu" class="salvarUsu">Cpf de usuário:</label>
        <input type="number" name="cpfUsu" id="cpfUsu" >

        <button type="submit" id="castrastarUsu">Cadastrar</button>
    </form>

    <?php include 'footer.php'?>

</div>
