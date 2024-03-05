<?php
session_start();

if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("Location: ./login.php");
} else {
    //Armazenando váriaveis de sessão
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $nivel    = $_SESSION['nivel'];
    $fullname = $_SESSION['fullname'];

    $isSuper = ($nivel === 'super');
    $isAdmin = ($nivel === 'admin');
    $isUser = ($nivel === 'user');
}