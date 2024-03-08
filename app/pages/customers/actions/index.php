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
    $customerId            = htmlspecialchars($_POST['customerId']);
    $customerCreatedAt     = htmlspecialchars($_POST['customerCreatedAt']);
    $customerName          = htmlspecialchars($_POST['customerName']);
    $customerCpf           = htmlspecialchars($_POST['customerCpf']);
    $customerHomePhone     = htmlspecialchars($_POST['customerHomePhone']);
    $customerBusinessPhone = htmlspecialchars($_POST['customerBusinessPhone']);
    $customerMobilePhone   = htmlspecialchars($_POST['customerMobilePhone']);
    $customerPersonalEmail = htmlspecialchars($_POST['customerPersonalEmail']);
    $customerBusinessEmail = htmlspecialchars($_POST['customerBusinessEmail']);
    $customerCep           = htmlspecialchars($_POST['customerCep']);
    $customerAddress       = htmlspecialchars($_POST['customerAddress']);
    $customerDistrict      = htmlspecialchars($_POST['customerDistrict']);
    $customerCity          = htmlspecialchars($_POST['customerCity']);
    $customerState         = htmlspecialchars($_POST['customerState']);
    $customerPs            = htmlspecialchars($_POST['customerPs']);

    $customerUpdatedAt     = date('Y-m-d');

    $action                 = mysqli_real_escape_string($conexao, $action );
    $customerId             = mysqli_real_escape_string($conexao, $customerId);
    $customerCreatedAt      = mysqli_real_escape_string($conexao, $customerCreatedAt);
    $customerName           = mysqli_real_escape_string($conexao, $customerName);
    $customerCpf            = mysqli_real_escape_string($conexao, $customerCpf);
    $customerHomePhone      = mysqli_real_escape_string($conexao, $customerHomePhone);
    $customerBusinessPhone  = mysqli_real_escape_string($conexao, $customerBusinessPhone);
    $customerMobilePhone    = mysqli_real_escape_string($conexao, $customerMobilePhone);
    $customerPersonalEmail  = mysqli_real_escape_string($conexao, $customerPersonalEmail);
    $customerBusinessEmail  = mysqli_real_escape_string($conexao, $customerBusinessEmail);
    $customerCep            = mysqli_real_escape_string($conexao, $customerCep);
    $customerAddress        = mysqli_real_escape_string($conexao, $customerAddress);
    $customerDistrict       = mysqli_real_escape_string($conexao, $customerDistrict);
    $customerCity           = mysqli_real_escape_string($conexao, $customerCity);
    $customerState          = mysqli_real_escape_string($conexao, $customerState);
    $customerPs             = mysqli_real_escape_string($conexao, $customerPs);

    /**
     * Query de inserção dos dados no BD
     */
    if($action == 1):
        
        $query = "INSERT INTO customers (
                    created_at, 
                    name, 
                    cpf,
                    home_phone, 
                    business_phone, 
                    cell_phone, 
                    personal_email, 
                    business_email, 
                    cep, 
                    address, 
                    district, 
                    city, 
                    state, 
                    ps
                ) 
                VALUES (
                    '$customerCreatedAt', 
                    '$customerName', 
                    '$customerCpf', 
                    '$customerHomePhone', 
                    '$customerBusinessPhone', 
                    '$customerMobilePhone', 
                    '$customerPersonalEmail', 
                    '$customerBusinessEmail', 
                    '$customerCep', 
                    '$customerAddress', 
                    '$customerDistrict', 
                    '$customerCity', 
                    '$customerState', 
                    '$customerPs'
                )";


        $msg = 'msg=Cliente Adicionado com Sucesso';
        $alertBg = 'alertBg=success';
    
    endif;

    /**
     * Query de atualização dos dados no BD
     */
    if($action == 2):
        $query = "
            UPDATE customers
            SET
                name = '$customerName',
                cpf = '$customerCpf',
                home_phone = '$customerHomePhone',
                business_phone = '$customerBusinessPhone',
                cell_phone = '$customerMobilePhone',
                personal_email = '$customerPersonalEmail',
                business_email = '$customerBusinessEmail',
                cep = '$customerCep',
                address = '$customerAddress',
                district = '$customerDistrict',
                city = '$customerCity',
                state = '$customerState',
                ps = '$customerPs',
                updated_at = '$customerUpdatedAt'
            WHERE id = {$customerId}
        ";

        echo "<pre>{$query}</pre>";

        $msg = 'msg=Cadastro Atualizado com Sucesso';
        $alertBg = 'alertBg=primary';
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

        $msg = 'msg=O Cadastro Excluído';
        $alertBg = 'alertBg=danger';
    endif;


    if($conexao->query($query) === TRUE):
        header("location: /geagron/app/customers.php?{$msg}&{$alertBg}");
    else:
        header("location: /geagron/app/customers.php?msg=Erro ao realizar operação&alertBg=warning");
        echo "<pre>{$query}</pre>";
    endif;

    $conexao->close();