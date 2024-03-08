<?php

    /**
     * Recebendo dados do form de edição de cliente
     * na listagem de clientes, para recuperar os valores
     * e mostralos nos inputs, para que possam ser alterados
     */
    @$propertyId = htmlspecialchars($_POST['propertyId']);

    /**
     * Se o ID do cliente não for vazio, indica que foi
     * clicado no botão de editar o cadastro, passando o ID
     * do cliente em questão, então recuperamos seus dados
     * enviados pelo form ao clicar no botão de editar
     */
    if(!empty($propertyId )):
        $propertyCreatedAt         = htmlspecialchars($_POST['propertyCreatedAt']);
        $propertyName              = htmlspecialchars($_POST['propertyName']);
        $propertyStateRegistration = htmlspecialchars($_POST['propertyStateRegistration']);
        $propertyCep               = htmlspecialchars($_POST['propertyCep']);
        $propertyAddress           = htmlspecialchars($_POST['propertyAddress']);
        $propertyDistrict          = htmlspecialchars($_POST['propertyDistrict']);
        $propertyCity              = htmlspecialchars($_POST['propertyCity']);
        $propertyState             = htmlspecialchars($_POST['propertyState']);
        $propertyCultivatedArea    = htmlspecialchars($_POST['propertyCultivatedArea']);
        $propertyTotalArea         = htmlspecialchars($_POST['propertyTotalArea']);

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
