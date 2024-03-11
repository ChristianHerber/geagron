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

    $plotUpdatedAt     = date('Y-m-d H:m:i');
    $plotDeletedAt     = date('Y-m-d H:m:i');


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
            UPDATE plots
            SET
                name = '{$plotName}',
                cultivated_area = '{$plotCultivatedArea}',
                total_area = '{$plotTotalArea}',
                updated_at = '{$plotUpdatedAt}'
            WHERE
                id = {$plotId}
        ";

        $msg = 'msg=Talhão Atualizado com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE plots
            SET
                deleted_at = '{$plotDeletedAt}'
            WHERE id = {$plotId}
        ";

        $msg = 'msg=O Registro Foi Excluído!';
        $alertBg = 'alertBg=danger';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: /geagron/app/plots.php?{$msg}&{$alertBg}");
    endif;

    $conexao->close();