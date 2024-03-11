<?php

require_once 'connection/index.php';

$plotList = "SELECT * FROM plots WHERE deleted_at is null";

$result = $conexao->query($plotList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='plots.php' method='post'>

                    <input type='hidden' name='plotCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='plotId' value='{$row['id']}'>
                    <input type='hidden' name='plotName' value='{$row['name']}'>
                    <input type='hidden' name='plotCultivatedArea' value='{$row['cultivated_area']}'>
                    <input type='hidden' name='plotTotalArea' value='{$row['total_area']}'>


                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>
                    
                </form>
            </td>
            <td>{$row['cultivated_area']}</td>
            <td>{$row['total_area']}</td>
            <td>
                <a href='escolher_registro' class='btn btn-sm btn-danger' id='btnDelete'>
                    <i class='fa fa-trash-alt'></i>
                </a>
            </td>
        </tr>
    ";

    endwhile;
endif;