<?php
include_once 'conexao.php'; // Ajuste o caminho conforme necessário

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber e sanitizar os dados do formulário
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);

    // Hash da senha para segurança
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar a consulta SQL
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

    // Executar a consulta e verificar se o cadastro foi bem-sucedido
    if (mysqli_query($connect, $sql)) {
        // Redirecionar para a página de login em caso de sucesso
        header("Location: ../login.php");
        exit(); // Garantir que o script não continue executando após o redirecionamento
    } else {
        // Exibir uma mensagem de erro se a consulta falhar
        echo "Erro: " . mysqli_error($connect);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($connect);
} else {
    echo "Método de solicitação inválido.";
}
?>
