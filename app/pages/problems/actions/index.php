<?php


    include('../../../connection/index.php');

    /**
     * Recupera os dados
     */
    $action             = htmlspecialchars($_GET['action']);
    $problemId          = htmlspecialchars(!empty($_POST['problemId']) ? $_POST['problemId'] : $_GET['problemId']);
    $problemCreatedAt   = htmlspecialchars($_POST['problemCreatedAt']);
    $problemName        = htmlspecialchars($_POST['problemName']);
    $problemPopularName = htmlspecialchars($_POST['problemPopularName']);

    $problemUpdatedAt   = date('Y-m-d H:m:i');
    $problemDeletedAt   = date('Y-m-d H:m:i');

    $action             = mysqli_real_escape_string($conexao, $action);
    $problemId          = mysqli_real_escape_string($conexao, $problemId);
    $problemCreatedAt   = mysqli_real_escape_string($conexao, $problemCreatedAt);
    $problemName        = mysqli_real_escape_string($conexao, $problemName);
    $problemPopularName = mysqli_real_escape_string($conexao, $problemPopularName);


    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "
            INSERT INTO problems (
                created_at,
                name,
                popular_name
            )
            values (
                '{$problemCreatedAt}',
                '{$problemName}',
                '{$problemPopularName}'
            )
        ";

        $msg = 'msg=Problema Adicionado com Sucesso';
        $alertBg = 'alertBg=success';
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE problems
            SET
                updated_at = '{$problemUpdatedAt}', 
                name = '{$problemName}',
                popular_name = '{$problemPopularName}'
            WHERE id = {$problemId}
        ";

        $msg = 'msg=Problema Atualizado com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE problems
            SET
                deleted_at = '{$problemDeletedAt}'
            WHERE id = {$problemId}
        ";

        $msg = 'msg=O Registro Foi Excluído!';
        $alertBg = 'alertBg=danger';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: /geagron/app/problems.php?{$msg}&{$alertBg}");
    endif;

    $conexao->close();