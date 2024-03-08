<?php

    require_once './pages/properties/parts/header.php';

    if(!isset($_SESSION['customer_name'])):

        echo "
            <div class='alert alert-warning shadow'>
                <i class='fa fa-exclamation-circle'></i>
                Para cadastrar e/ou exibir as Propriedades, selecione um primeirante um <strong>Cliente</strong>.
            </div>
        ";

    else:

        require_once './pages/commons/messages.php';
        require_once './pages/properties/parts/form.php';
        require_once './pages/properties/parts/table.php';

    endif;