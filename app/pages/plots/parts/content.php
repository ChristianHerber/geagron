<?php

    require_once './pages/plots/parts/header.php';

    if(!isset($_SESSION['property_name'])):

        echo "
            <div class='alert alert-warning shadow'>
                <i class='fa fa-exclamation-circle'></i>
                Para cadastrar e/ou exibir os Talhões, selecione um primeirante uma <strong>Propriedade</strong>.
            </div>
        ";

    else:

        require_once './pages/commons/messages.php';
        require_once './pages/plots/parts/form.php';
        require_once './pages/plots/parts/table.php';

    endif;