<?php

include('connection/index.php');

// Iniciar a sessão (se ainda não estiver iniciada)
session_start();

// Verificar se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os campos de usuário e senha foram preenchidos
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Recuperar os valores enviados pelo formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Consulta SQL para verificar as credenciais do usuário
        $query = "SELECT * FROM usuarios WHERE username = ? AND password = SHA1(?)";
        
        // Preparar a declaração
        $stmt = $conexao->prepare($query);

        // Verificar se a declaração foi preparada com sucesso
        if ($stmt === false) {
            die('Erro na preparação da declaração: ' . $conexao->error);
        }

        // Hash da senha (se você estiver usando hash para armazenar as senhas no banco de dados)
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Associar parâmetros à declaração
        $stmt->bind_param("ss", $username, $password);

        // Executar a declaração
        $stmt->execute();

        // Vincular as variáveis do resultado
        $stmt->bind_result($id, $user_name, $fullname, $nivel, $pass_word);

        // Verificar se as credenciais são válidas
        if ($stmt->fetch()) {
            // Credenciais válidas - redirecionar para a página inicial e armazenar o ID do usuário e nível na sessão
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['nivel']    = $nivel;
            $_SESSION['fullname'] = $fullname;
            header("Location: ./atendimento.php");
            exit; // Certifica-se de que o script seja interrompido após o redirecionamento
        } else {
            // Credenciais inválidas - exibir mensagem de erro
            header("location:./login.php?msg=erro");
        }

        // Fechar a declaração e a conexão
        $stmt->close();
        $conexao->close();
    } else {
        // Campos de usuário e senha não foram preenchidos - exibir mensagem de erro
        $erro = "Por favor, preencha todos os campos.";
    }
}