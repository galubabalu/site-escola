<?php
session_start();
include_once 'conexao.php'; // Inclui a conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);

    // Consulta para verificar se o usuário existe no banco de dados
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);

        // Verifica se a senha está correta
        if (password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido, armazena as informações na sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header('Location: ../index.php'); // Redireciona para a página inicial
            exit;
        } else {
            // Senha incorreta
            echo "Senha incorreta!";
        }
    } else {
        // Usuário não encontrado
        echo "Usuário não encontrado!";
    }
}
?>
