<?php

/**
 * Previne roubo de sessão
 */
session_set_cookie_params(['httponly' => true]);

/**
 * Inicia a sessão
 */
session_start();

/**
 * Gera uma nova id de sessão a cada login
 */
session_regenerate_id();

if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("Location: ./login.php");
} else {
    //Armazenando váriaveis de sessão
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $nivel    = $_SESSION['nivel'];
    $fullname = $_SESSION['fullname'];

    /**
     * Variáveis de nivel de usuario
     * para fazer a verificação
     */
    $isSuper = ($nivel === 'super');
    $isAdmin = ($nivel === 'admin');
    $isUser = ($nivel === 'user');
}