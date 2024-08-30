<nav id="sidebar">
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="suporte.php">Suporte</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro_usuario.php">Cadastre-se</a></li>
        <?php if (isset($_SESSION['usuario_id'])): // Verifica se o usuário está logado ?>
            <li><a href="logout.php">Sair</a></li>
            <li><a href="perfil.php">Perfil</a></li>
        <?php endif; ?>
    </ul>
</nav>
