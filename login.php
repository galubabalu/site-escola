<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php'; ?>
    <header>
        <p>Escola Quintino Folhiarine Dajori</header></p>
    </header>
    <main>
        <div class="content">
            <!-- Modificação: Adicionando método POST e a ação que aponta para o script de processamento -->
            <form method="POST" action="back/processa_login.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control col-sm-10" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Password</label>
                    <input type="password" class="form-control col-sm-10" name="senha" id="senha" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input col-sm-0" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Confirme</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Quintino Folhiarine Dajori. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
