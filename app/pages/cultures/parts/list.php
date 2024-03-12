<?php

require_once 'connection/index.php';

$cultureList = "SELECT * FROM cultures WHERE deleted_at is null";

$result = $conexao->query($cultureList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td><a href='editar_registro'>{$row['name']}</a></td>
            <td>{$row['scientific_name']}</td>
            <td>{$row['group']}</td>
            <td>
                <a href='escolher_registro' class='btn btn-sm btn-danger' id='btnDelete'>
                    <i class='fa fa-trash-alt'></i>
                </a>
            </td>
        </tr>
    ";

    endwhile;
endif;