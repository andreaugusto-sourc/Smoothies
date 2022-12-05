<div class="site">
    <?php include 'header.php' ?>

        <form action="logoutAdm.php" method="post">
            <label for="">Usuário:</label>
            <input type="text" name="usuario">

            <label for="">Senha:</label>
            <input type="password" name="senha">

            <button type="submit">Login</button>
        </form>


    <?php include 'footer.php' ?>
</div>

