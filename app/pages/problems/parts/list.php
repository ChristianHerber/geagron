<?php

require_once 'connection/index.php';

$problemList = "SELECT * FROM problems WHERE deleted_at is null";

$result = $conexao->query($problemList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='problems.php' method='post'>
                
                    <input type='hidden' name='problemCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='problemId' value='{$row['id']}'>
                    <input type='hidden' name='problemName' value='{$row['name']}'>
                    <input type='hidden' name='problemPopularName' value='{$row['popular_name']}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>
                </form>
            </td>
            <td>{$row['popular_name']}</td>
            <td>
                <button 
                    class='btn btn-sm btn-danger ml-2' 
                    id='btnProblemDelete'
                    link='./pages/problems/actions/index.php?action=3&problemId={$row['id']}'
                >
                    <i class='fa fa-trash-alt'></i>
                </button>
            </td>
        </tr>
    ";

    endwhile;
endif;