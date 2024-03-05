<?php

    $host = '';
    $usuario = '';
    $senha = '';
    $banco = '';

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if($conexao->conect_errorno) {
        echo "Erro ao conectar $conexao->connect_error";
    }