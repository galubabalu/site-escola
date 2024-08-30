<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<body>
    <?php
    session_start(); // Inicia ou retoma a sessão
    if (!isset($_SESSION['usuario_id'])) {
        // Redireciona para a página de login se o usuário não estiver logado
        header("Location: login.php");
        exit;
    }
    ?>

    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php'; ?>
    <header>
        <p>Escola Milanês - Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</p>
    </header>
    <main>
        <div class="content">

            <!-- Formulário de Solicitação para a Escola -->
            <h3>Solicitação para a Escola</h3>
            <form method="post" action="enviar_solicitacao.php">
                <div class="form-group">
                    <label for="solicitacao">Escreva sua solicitação:</label>
                    <textarea id="solicitacao" name="solicitacao" class="form-control col-sm-8" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
            </form>

            <!-- Localização da Escola no Google Maps -->
            <h3>Localização da Escola</h3>
            <div id="mapa" style="height: 400px; width: 100%;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.463893599249!2d-49.3027167!3d-28.7156355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9521b65d3c9e7c95%3A0x4f7a62b9d5a8e9b5!2sR.%20Santa%20Rita%20de%20C%C3%A1ssia%2C%20226%20-%20288%20-%20Pres.%20Vargas%2C%20I%C3%A7ara%20-%20SC%2C%2088820-000!5e0!3m2!1spt-BR!2sbr!4v1692727332164!5m2!1spt-BR!2sbr"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>

            </div>

            <!-- Formulário de Solicitação de Livros na Biblioteca -->
            <h3>Solicitação de Livros na Biblioteca</h3>
            <form method="post" action="solicitar_livro.php">
                <div class="form-group">
                    <label for="livro">Nome do Livro:</label>
                    <input type="text" id="livro" name="livro" class="form-control col-sm-6" required>
                </div>
                <button type="submit" class="btn btn-primary">Solicitar Livro</button>
            </form>

            <!-- Formulário para Notificação de Ausência -->
            <h3>Notificar Ausência</h3>
            <form method="post" action="notificar_ausencia.php">
                <div class="form-group">
                    <label for="data">Data da Ausência:</label>
                    <input type="date" id="data" name="data" class="form-control col-sm-4" required>
                </div>
                <div class="form-group">
                    <label for="motivo">Motivo da Ausência:</label>
                    <textarea id="motivo" name="motivo" class="form-control col-sm-8" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Notificar Ausência</button>
            </form>

            <!-- Visualização das Matérias de Acordo com a Turma -->
            <h3>Matérias do Ano Letivo</h3>
            <div id="materias">
                <!-- Esta parte deve ser preenchida dinamicamente com base no banco de dados -->
                <p>Carregando as matérias da turma...</p>
            </div>

        </div>

        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
