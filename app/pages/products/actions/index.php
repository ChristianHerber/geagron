<?php


    include('../../../connection/index.php');

    /**
     * Recupera os dados
     */
    $action           = htmlspecialchars($_GET['action']);
    $classId          = htmlspecialchars(!empty($_POST['classId']) ? $_POST['classId'] : $_GET['classId']);
    $classCreatedAt   = htmlspecialchars($_POST['classCreatedAt']);
    $className        = htmlspecialchars($_POST['className']);

    $classUpdatedAt   = date('Y-m-d H:m:i');
    $classDeletedAt   = date('Y-m-d H:m:i');

    $action           = mysqli_real_escape_string($conexao, $action);
    $classId          = mysqli_real_escape_string($conexao, $classId);
    $classCreatedAt   = mysqli_real_escape_string($conexao, $classCreatedAt);
    $className        = mysqli_real_escape_string($conexao, $className);


    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "
            INSERT INTO classes (
                created_at,
                name
            )
            values (
                '{$classCreatedAt}',
                '{$className}'
            )
        ";

        $msg = 'msg=Classe Adicionado com Sucesso';
        $alertBg = 'alertBg=success';
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE classes
            SET
                updated_at = '{$classUpdatedAt}', 
                name = '{$className}'
            WHERE id = {$classId}
        ";

        $msg = 'msg=Classe Atualizado com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE classes
            SET
                deleted_at = '{$classDeletedAt}'
            WHERE id = {$classId}
        ";

        $msg = 'msg=O Registro Foi Excluído!';
        $alertBg = 'alertBg=danger';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: /geagron/app/classes.php?{$msg}&{$alertBg}");
    endif;

    $conexao->close();