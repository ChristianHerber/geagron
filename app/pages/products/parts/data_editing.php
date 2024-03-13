<?php

    /**
     * Recebendo dados do form de edição de cliente
     * na listagem de clientes, para recuperar os valores
     * e mostralos nos inputs, para que possam ser alterados
     */
    @$productId = htmlspecialchars($_POST['productId']);

    /**
     * Se o ID do cliente não for vazio, indica que foi
     * clicado no botão de editar o cadastro, passando o ID
     * do cliente em questão, então recuperamos seus dados
     * enviados pelo form ao clicar no botão de editar
     */
    if(!empty($productId )):
        $productCreatedAt                   = htmlspecialchars($_POST['productCreatedAt']);
        $productName                        = htmlspecialchars($_POST['productName']);
        $productActiveIngredient            = htmlspecialchars($_POST['productActiveIngredient']);
        $productConcentration               = htmlspecialchars($_POST['productConcentration']);
        $productPhysicalState               = htmlspecialchars($_POST['productPhysicalState']);
        $productClass                       = htmlspecialchars($_POST['productClass']);
        $productClassName                   = htmlspecialchars($_POST['productClassName']);
        $productToxicClass                  = htmlspecialchars($_POST['productToxicClass']);
        $productUnit                        = htmlspecialchars($_POST['productUnit']);
        $productFlammable                   = htmlspecialchars($_POST['productFlammable']);
        $productCorrosive                   = htmlspecialchars($_POST['productCorrosive']);
        $productEnvironmentalClassification = htmlspecialchars($_POST['productEnvironmentalClassification']);
        $productChemicalGroup               = htmlspecialchars($_POST['productChemicalGroup']);
        $productFormulation                 = htmlspecialchars($_POST['productFormulation']);
        $productActionMode                  = htmlspecialchars($_POST['productActionMode']);
        $productApplicationTechnology       = htmlspecialchars($_POST['productApplicationTechnology']);
        $productMapaNumber                  = htmlspecialchars($_POST['productMapaNumber']);
        $productRecordHolder                = htmlspecialchars($_POST['productRecordHolder']);
        $productStatus                      = htmlspecialchars($_POST['productStatus']);
        $productApplications                = htmlspecialchars($_POST['productApplications']);
        $productPackaging                   = htmlspecialchars($_POST['productPackaging']);

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
