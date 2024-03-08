<?php

    /**
     * Recebendo dados do form de seleção de cliente
     * na listagem de clientes, para atribuir os valores
     * ID e NOME do cliente em questão às variáveis de sessão
     * $_SESSION['property_id'] e $_SESSION['property_name']
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['propertySelectedName']) || isset($_POST['propertySelectedId'])) {

            /**
             * Variável de sessão que guarda o
             * valor com o nome do cliente selecionado
             */
            $_SESSION['property_name'] = $_POST['propertySelectedName'];
            
            /**
             * Variável de sessão que guarda o
             * valor com o id do cliente selecionado
             * este id será utilizado para inidcar no
             * cadastro das propriedades a qual cliente
             * a propriedade que está sendo cadastrada pertence 
             */
            $_SESSION['property_id'] = $_POST['propertySelectedId'];

            /**
             * Redirecionamento forçado para dar um refresh na página
             * Foi necessários pois o cliente selecionado passa a ser
             * exibido na navbar apenas após o refresh, para que ao
             * selecionar o cliente o nome do mesmo seja exibido
             */
            echo "<script>window.location.href = 'properties.php';</script>";
        }
    }