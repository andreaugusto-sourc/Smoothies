<?php
session_start();

if(isset($_SESSION['usuario'])) {
    die("Você já está logado!"); 
}
?>
<div class="site">
    <?php include 'header.php'?>
    
    <form action="salvarUsu.php" method="post">
        <label for="nomeUsu">Nome de usuário:</label>
        <input type="text" name="nomeUsu" id="nomeUsu">

        <label for="emailUsu">E-mail de usuário:</label>
        <input type="email" name="emailUsu" id="emailUsu">

        <label for="senhaUsu">Senha de usuário:</label>
        <input type="password" name="senhaUsu" id="senhaUsu">

        <label for="cpfUsu">Cpf de usuário:</label>
        <input type="text" name="cpfUsu" id="cpfUsu">

        <button type="submit">Cadastrar</button>
    </form>

    <?php include 'footer.php'?>

</div>
