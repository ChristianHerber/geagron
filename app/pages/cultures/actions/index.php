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
    $action                = htmlspecialchars($_GET['action']);
    $cultureId             = htmlspecialchars(!empty($_POST['cultureId']) ? $_POST['cultureId'] : $_GET['cultureId']);
    $cultureCreatedAt      = htmlspecialchars($_POST['cultureCreatedAt']);
    $cultureName           = htmlspecialchars($_POST['cultureName']);
    $cultureScientificName = htmlspecialchars($_POST['cultureScientificName']);
    $cultureGroup          = htmlspecialchars($_POST['cultureGroup']);

    $cultureUpdatedAt      = date('Y-m-d H:m:i');
    $cultureDeletedAt      = date('Y-m-d H:m:i');

    $action                = mysqli_real_escape_string($conexao, $action);
    $cultureId             = mysqli_real_escape_string($conexao, $cultureId);
    $cultureCreatedAt      = mysqli_real_escape_string($conexao, $cultureCreatedAt);
    $cultureName           = mysqli_real_escape_string($conexao, $cultureName);
    $cultureScientificName = mysqli_real_escape_string($conexao, $cultureScientificName);
    $cultureGroup          = mysqli_real_escape_string($conexao, $cultureGroup);


    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "
            INSERT INTO cultures (
                created_at,
                name,
                scientific_name,
                `group`
            )
            values (
                '{$cultureCreatedAt}',
                '{$cultureName}',
                '{$cultureScientificName}',
                '{$cultureGroup}'
            )
        ";

        $msg = 'msg=Cultura Adicionada com Sucesso';
        $alertBg = 'alertBg=success';
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE cultures
            SET
                created_at = '{$cultureCreatedAt}', 
                name = '{$cultureName}',
                scientific_name = '{$cultureScientificName}',
                `group` = '{$cultureGroup}',
            WHERE id = {$cultureId}
        ";

        $msg = 'msg=Cultura Atualizada com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE cultures
            SET
                deleted_at = {$cultureDeletedAt}
            WHERE id = {$cultureId}
        ";

        $msg = 'msg=O Registro Foi Excluído!';
        $alertBg = 'alertBg=danger';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: /geagron/app/cultures.php?{$msg}&{$alertBg}");
    endif;

    $conexao->close();