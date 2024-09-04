<?php
session_start();
include 'back/conexao.php'; // Inclua a conexão com o banco de dados

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redireciona para a página de login se o usuário não estiver logado
    exit;
}

$usuario_id = $_SESSION['usuario_id'];

// Buscar dados do usuário logado
$query = "SELECT * FROM usuarios WHERE id = $usuario_id";
$result = mysqli_query($connect, $query);
$usuario = mysqli_fetch_assoc($result);

if (!$usuario) {
    echo "Usuário não encontrado!";
    exit;
}

// Se o formulário de edição foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['atualizar'])) {
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a nova senha

    // Atualizar dados do usuário
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $usuario_id";
    if (mysqli_query($connect, $query)) {
        $_SESSION['usuario_nome'] = $nome; // Atualiza o nome na sessão
        header("Location: perfil.php");
        echo "Perfil atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar perfil: " . mysqli_error($connect);
    }
}

// Se o formulário de remoção foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remover'])) {
    // Remover o usuário do banco de dados
    $query = "DELETE FROM usuarios WHERE id = $usuario_id";
    if (mysqli_query($connect, $query)) {
        // Destroi a sessão e redireciona para a página de login
        session_destroy();
        header("Location: login.php");
        exit;
    } else {
        echo "Erro ao remover conta: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/cabecalho.php'; ?>
<style>
    ul {
        margin-top: 7%;
    }
</style>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'includes/menu.php'; ?>
    <header>
        <p>Escola Quintino Folhiarine Dajori</header></p>
    </header>
    <main>
        <div class="content">
            <h1>Editar Perfil</h1>
            <form action="atualizar_perfil.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($usuario['nome']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="senha">Nova Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" name="atualizar" class="btn btn-primary">Atualizar Perfil</button>
            </form>

            <!-- Formulário para remover a conta -->
            <h2>Remover Conta</h2>
            <form action="atualizar_perfil.php" method="post" onsubmit="return confirm('Tem certeza que deseja remover sua conta? Esta ação não pode ser desfeita.');">
                <button type="submit" name="remover" class="btn btn-danger">Remover Conta</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Escola Quintino Folhiarine Dajori. Todos os direitos reservados.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
