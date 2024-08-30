<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php'; ?>
    <header>
        <p>Escola Milanês</p>
    </header>
    <main>
        <div class="content">
            <!-- Formulário de cadastro de usuários -->
            <h1>Cadastre-se</h1>
            <form action="back/processa_cadastro_usuario.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
