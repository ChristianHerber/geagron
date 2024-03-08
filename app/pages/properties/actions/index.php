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
    $action                    = htmlspecialchars($_GET['action']);
    $propertyId                = htmlspecialchars(!empty($_POST['propertyId']) ? $_POST['propertyId'] : $_GET['propertyId']);
    $propertyCustomer          = htmlspecialchars($_POST['propertyCustomer']);
    $propertyCreatedAt         = htmlspecialchars($_POST['propertyCreatedAt']);
    $propertyName              = htmlspecialchars($_POST['propertyName']);
    $propertyStateRegistration = htmlspecialchars($_POST['propertyStateRegistration']);
    $propertyCEP               = htmlspecialchars($_POST['propertyCEP']);
    $propertyAddress           = htmlspecialchars($_POST['propertyAddress']);
    $propertyDistrict          = htmlspecialchars($_POST['propertyDistrict']);
    $propertyCity              = htmlspecialchars($_POST['propertyCity']);
    $propertyState             = htmlspecialchars($_POST['propertyState']);
    $propertyCultivatedArea    = htmlspecialchars($_POST['propertyCultivatedArea']);
    $propertyTotalArea         = htmlspecialchars($_POST['propertyTotalArea']);

    $propertyUpdatedAt         = date('Y-m-d H:m:i');
    $propertyDeletedAt         = date('Y-m-d H:m:i');

    $action                    = mysqli_real_escape_string($conexao, $action );
    $propertyId                = mysqli_real_escape_string($conexao, $propertyId);
    $propertyCustomer          = mysqli_real_escape_string($conexao, $propertyCustomer);
    $propertyCreatedAt         = mysqli_real_escape_string($conexao, $propertyCreatedAt);
    $propertyName              = mysqli_real_escape_string($conexao, $propertyName);
    $propertyStateRegistration = mysqli_real_escape_string($conexao, $propertyStateRegistration);
    $propertyCEP               = mysqli_real_escape_string($conexao, $propertyCEP);
    $propertyAddress           = mysqli_real_escape_string($conexao, $propertyAddress);
    $propertyDistrict          = mysqli_real_escape_string($conexao, $propertyDistrict);
    $propertyCity              = mysqli_real_escape_string($conexao, $propertyCity);
    $propertyState             = mysqli_real_escape_string($conexao, $propertyState);
    $propertyCultivatedArea    = mysqli_real_escape_string($conexao, $propertyCultivatedArea);
    $propertyTotalArea         = mysqli_real_escape_string($conexao, $propertyTotalArea);

    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        $query = "INSERT INTO properties (
            created_at,
            name,
            state_registration,
            cep,
            address,
            district,
            city,
            state,
            cultivated_area,
            total_area,
            customer_id
        ) 
        VALUES (
            '$propertyCreatedAt',
            '$propertyName',
            '$propertyStateRegistration',
            '$propertyCEP',
            '$propertyAddress',
            '$propertyDistrict',
            '$propertyCity',
            '$propertyState',
            '$propertyCultivatedArea',
            '$propertyTotalArea',
            $propertyCustomer
        )";

        $msg = 'msg=Propriedade Adicionada com Sucesso';
        $alertBg = 'alertBg=success';
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE properties
            SET
                name = '$propertyName',
                state_registration = '$propertyStateRegistration',
                cep = '$propertyCEP',
                address = '$propertyAddress',
                district = '$propertyDistrict',
                city = '$propertyCity',
                state = '$propertyState',
                cultivated_area = '$propertyCultivatedArea',
                total_area = '$propertyTotalArea',
                customer_id = $propertyCustomer,
                updated_at = '$propertyUpdatedAt'
            WHERE id = {$propertyId}
        ";

        $msg = 'msg=Propriedade Atualizada com Sucesso';
        $alertBg = 'alertBg=primary';
    endif;

    /**
     * Query de deleção (soft delete) dos dados no BD
     */
    if($action == 3):
        $query = "
            UPDATE properties
            SET
                deleted_at = '$propertyDeletedAt'
            WHERE id = {$propertyId}
        ";

        $msg = 'msg=O Registro foi Excluído!';
        $alertBg = 'alertBg=danger';
    endif;


    if($conexao->query($query) == TRUE):
        header("location: /geagron/app/properties.php?{$msg}&{$alertBg}");
        echo "<pre>{$query}</pre>";
    else:
        header("location: /geagron/app/properties.php?msg=Erro ao realizar operação&alertBg=warning");
    endif;

    $conexao->close();