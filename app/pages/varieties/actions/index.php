<?php

    /**
     * ações de inserção
     * edição e deletação
     * de dados
     **/

    include('../../../connection/index.php');

    /**
     * Recupera os dados
     */

    $action = $_GET['action']; //Verifica a ação a ser realizada

    $id = $_GET['id']; //id do registro a ser atualizado ou excluído (soft delete)

    $name = $_GET['name']; //exemplo de um registro

    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "
            INSERT INTO table_name
            values ('{$name}')
        ";

        $feedBack = 'feedBack=insert';
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE table_name
            SET
                name = {$name}
            WHERE id = {$id}
        ";

        $feedBack = 'feedBack=update';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE table_name
            SET
                deleted_at = {$deleted_at}
            WHERE id = {$id}
        ";

        $feedBack = 'feedBack=delete';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: ./wellcome.php?{$feedBack}");
    endif;

    $conexao->close();