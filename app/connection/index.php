<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "geagron";

$conexao = new mysqli($host,$user,$pass,$db);

// Check connection
if ($conexao -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conexao -> connect_error;
}