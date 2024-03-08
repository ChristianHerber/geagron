<?php

    @$msg = $_GET['msg'];
    @$alertBg = $_GET['alertBg'];

    $css = 'position:absolute;top:85px;right:2%;';

    if (!empty($msg)):

        echo "
            <div 
                class='alert alert-$alertBg border-$alertBg border-0 alert-dismissible shadow-sm fade show'
                style='{$css}'
                role='alert' 
                id='alert-msg'
            >
                <i class='fa fa-info-circle'></i>
                $msg
            </div>
        ";

    endif;