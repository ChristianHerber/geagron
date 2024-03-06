<?php

    /**
     * Aqui vai a query sql buscando os
     * dados no BD e listando na tabela
     */

    echo "
        <tr>
            <td><a href='editar_registro'>Nome</a></td>
            <td>Inscrição Estadual</td>
            <td>Cidade</td>
            <td>UF</td>
            <td>
                <a href='escolher_registro' class='btn btn-sm btn-success' id='btnSelect'>
                    <i class='fa fa-check'></i>
                </a>

                <a href='escolher_registro' class='btn btn-sm btn-danger' id='btnDelete'>
                    <i class='fa fa-trash-alt'></i>
                </a>
            </td>
        </tr>
    ";