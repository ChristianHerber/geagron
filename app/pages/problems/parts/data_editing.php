<?php

    /**
     * Recebendo dados do form de edição de cliente
     * na listagem de clientes, para recuperar os valores
     * e mostralos nos inputs, para que possam ser alterados
     */
    @$problemId = htmlspecialchars($_POST['problemId']);

    /**
     * Se o ID do cliente não for vazio, indica que foi
     * clicado no botão de editar o cadastro, passando o ID
     * do cliente em questão, então recuperamos seus dados
     * enviados pelo form ao clicar no botão de editar
     */
    if(!empty($problemId )):
        $problemCreatedAt   = htmlspecialchars($_POST['problemCreatedAt']);
        $problemName        = htmlspecialchars($_POST['problemName']);
        $problemPopularName = htmlspecialchars($_POST['problemPopularName']);

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
