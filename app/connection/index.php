<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'buscaativa';

    $conexao = new msqli($host, $usuario, $senha, $banco);

    if($conexao->conect_errorno) {
        echo "Erro ao conectar $conexao->connect_error";
    }