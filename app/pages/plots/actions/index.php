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

    $action             = htmlspecialchars($_GET['action']);
    $plotId             = htmlspecialchars(!empty($_POST['plotId']) ? $_POST['plotId'] : $_GET['plotId']);
    $plotCreatedAt      = htmlspecialchars($_POST['plotCreatedAt']);
    $plotName           = htmlspecialchars($_POST['plotName']);
    $plotCultivatedArea = htmlspecialchars($_POST['plotCultivatedArea']);
    $plotTotalArea      = htmlspecialchars($_POST['plotTotalArea']);

    $action             = mysqli_real_escape_string($conexao, $action );
    $plotId             = mysqli_real_escape_string($conexao, $plotId );
    $plotCreatedAt      = mysqli_real_escape_string($conexao, $plotCreatedAt);
    $plotName           = mysqli_real_escape_string($conexao, $plotName);
    $plotCultivatedArea = mysqli_real_escape_string($conexao, $plotCultivatedArea);
    $plotTotalArea      = mysqli_real_escape_string($conexao, $plotTotalArea);

    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "
            INSERT INTO plots (
                created_at,
                name,
                cultivated_area,
                total_area
            )
            values (
                '{$plotCreatedAt}',
                '{$plotName}',
                '{$plotCultivatedArea}',
                '{$plotTotalArea}'
            )
        ";

        $msg = 'msg=Talhão Adicionado com Sucesso';
        $alertBg = 'alertBg=success';
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
        header("location: /geagron/app/plots.php?{$msg}&{$alertBg}");
    else:

    endif;

    $conexao->close();