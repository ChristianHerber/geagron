<?php

require_once 'connection/index.php';

$classList = "SELECT * FROM classes WHERE deleted_at is null";

$result = $conexao->query($classList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='classes.php' method='post'>
                
                    <input type='hidden' name='classCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='classId' value='{$row['id']}'>
                    <input type='hidden' name='className' value='{$row['name']}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>
                </form>
            </td>
            <td>
                <button 
                    class='btn btn-sm btn-danger ml-2' 
                    id='btnClassDelete'
                    link='./pages/classes/actions/index.php?action=3&classId={$row['id']}'
                >
                    <i class='fa fa-trash-alt'></i>
                </button>
            </td>
        </tr>
    ";

    endwhile;
endif;