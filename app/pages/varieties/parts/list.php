<?php

require_once 'connection/index.php';

$varietyList = "SELECT v.*, c.name as 'CultureName' FROM varieties v 
INNER JOIN cultures c on v.culture_id = c.id
WHERE v.deleted_at is null";

$result = $conexao->query($varietyList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='varieties.php' method='post'>

                    <input type='hidden' name='varietyCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='varietyId' value='{$row['id']}'>
                    <input type='hidden' name='varietyName' value='{$row['name']}'>
                    <input type='hidden' name='varietyCulture' value='{$row['culture_id']}'>
                    <input type='hidden' name='varietyCultureName' value='{$row['CultureName']}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>
                </form>
            </td>
            <td>{$row['CultureName']}</td>
            <td>
                <button 
                    class='btn btn-sm btn-danger ml-2' 
                    id='btnPlotDelete'
                    link='./pages/varieties/actions/index.php?action=3&varietyId={$row['id']}'
                >
                    <i class='fa fa-trash-alt'></i>
                </button>
            </td>
        </tr>
    ";

    endwhile;
endif;