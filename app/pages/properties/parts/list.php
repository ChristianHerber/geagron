<?php


require_once 'connection/index.php';

$propertiesList = "SELECT * FROM properties WHERE deleted_at is null";

$result = $conexao->query($propertiesList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td><a href='editar_registro'>{$row['name']}</a></td>
            <td>{$row['state_registration']}</td>
            <td>{$row['city']}</td>
            <td>{$row['state']}</td>
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

    endwhile;
endif;