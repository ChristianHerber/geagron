<?php

    /**
     * Recebendo dados do form de edição de cliente
     * na listagem de clientes, para recuperar os valores
     * e mostralos nos inputs, para que possam ser alterados
     */
    @$customerId = htmlspecialchars($_POST['customerId']);

    /**
     * Se o ID do cliente não for vazio, indica que foi
     * clicado no botão de editar o cadastro, passando o ID
     * do cliente em questão, então recuperamos seus dados
     * enviados pelo form ao clicar no botão de editar
     */
    if(!empty($customerId )):
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

        /**
         * Altera parâmetro do form para indicar a
         * edição do registro(cliente) selecionado
         */
        $actionLink = 'action=2';
        $btnLabel = 'Atualizar';
        $cardHeaderText = 'Atualizar Cadastro';

    else:

        /**
         * Caso não seja uma edição de resgitro(cliente)
         * matém os parâmetros de novo cadastro para o
         * formulário
         */
        $actionLink = 'action=1';
        $btnLabel = 'Cadastrar';
        $cardHeaderText = 'Novo Cadastro';

    endif;
