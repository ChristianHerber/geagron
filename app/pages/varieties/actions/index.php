<?php

    include('../../../connection/index.php');

    $action           = htmlspecialchars($_GET['action']);
    $varietyId        = htmlspecialchars(!empty($_POST['varietyId']) ? $_POST['varietyId'] : $_GET['varietyId']);
    $varietyCulture   = htmlspecialchars($_POST['varietyCulture']);
    $varietyName      = htmlspecialchars($_POST['varietyName']);
    $varietyCreatedAt = htmlspecialchars($_POST['varietyCreatedAt']);

    $varietyUpdatedAt = date('Y-m-d H:m:i');
    $varietyDeletedAt = date('Y-m-d H:m:i');

    $action           = mysqli_real_escape_string($conexao, $action);
    $varietyId        = mysqli_real_escape_string($conexao, $varietyId);
    $varietyCulture   = mysqli_real_escape_string($conexao, $varietyCulture);
    $varietyName      = mysqli_real_escape_string($conexao, $varietyName);
    $varietyCreatedAt = mysqli_real_escape_string($conexao, $varietyCreatedAt);

    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "
            INSERT INTO varieties (
                created_at,
                name,
                culture_id
            )
            values (
                '{$varietyCreatedAt}',
                '{$varietyName}',
                {$varietyCulture}
            )
        ";

        $msg = 'msg=Variedade Adicionado com Sucesso';
        $alertBg = 'alertBg=success';
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE varieties
            SET
                name = '{$varietyName}',
                culture_id = '{$varietyCulture}'
            WHERE id = {$varietyId}
        ";

        $msg = 'msg=Variedade Atualizada com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE varieties
            SET
                deleted_at = '{$varietyDeletedAt}'
            WHERE id = {$varietyId}
        ";

        $msg = 'msg=Variedade Atualizada com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: /geagron/app/varieties.php?{$msg}&{$alertBg}");
    endif;

    $conexao->close();