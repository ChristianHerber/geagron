<?php

require_once 'connection/index.php';

$cultureList = "SELECT * FROM cultures WHERE deleted_at is null";

$result = $conexao->query($cultureList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='cultures.php' method='post'>
                
                    <input type='hidden' name='cultureCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='cultureId' value='{$row['id']}'>
                    <input type='hidden' name='cultureName' value='{$row['name']}'>
                    <input type='hidden' name='cultureScientificName' value='{$row['scientific_name']}'>
                    <input type='hidden' name='cultureGroup' value='{$row['group']}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>
                </form>
            </td>
            <td>{$row['scientific_name']}</td>
            <td>{$row['group']}</td>
            <td>
                <button 
                    class='btn btn-sm btn-danger ml-2' 
                    id='btnCultureDelete'
                    link='./pages/cultures/actions/index.php?action=3&cultureId={$row['id']}'
                >
                    <i class='fa fa-trash-alt'></i>
                </button>
            </td>
        </tr>
    ";

    endwhile;
endif;