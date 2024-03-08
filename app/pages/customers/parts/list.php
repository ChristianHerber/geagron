<?php

    require_once 'connection/index.php';

    $customerList = "SELECT * FROM customers WHERE deleted_at is null";

    $result = $conexao->query($customerList);

    $date = date('Y-m-d');

    if($result->num_rows > 0):
        while($row = $result->fetch_assoc()):

            echo "
                <tr>
                    <td>
                        <form action='customers.php' method='POST'>

                            <input type='hidden' name='customerId' value='{$row['id']}'>
                            <input type='hidden' name='customerName' value='{$row['name']}'>
                            <input type='hidden' name='customerCpf' value='{$row['cpf']}'>
                            <input type='hidden' name='customerHomePhone' value='{$row['home_phone']}'>
                            <input type='hidden' name='customerBusinessPhone' value='{$row['business_phone']}'>
                            <input type='hidden' name='customerMobilePhone' value='{$row['cell_phone']}'>
                            <input type='hidden' name='customerPersonalEmail' value='{$row['personal_email']}'>
                            <input type='hidden' name='customerBusinessEmail' value='{$row['business_email']}'>
                            <input type='hidden' name='customerCep' value='{$row['cep']}'>
                            <input type='hidden' name='customerAddress' value='{$row['address']}'>
                            <input type='hidden' name='customerDistrict' value='{$row['district']}'>
                            <input type='hidden' name='customerCity' value='{$row['city']}'>
                            <input type='hidden' name='customerState' value='{$row['state']}'>
                            <input type='hidden' name='customerPs' value='{$row['ps']}'>
                            <input type='hidden' name='customerCreatedAt' value='{$row['created_at']}'>
                            <input type='hidden' name='customerUpdatedAt' value='{$date}'>

                            <button class='btn btn-link'>
                                {$row['name']}
                            </button>
                        </form>
                    </td>
                    <td>{$row['cpf']}</td>
                    <td>{$row['home_phone']}</td>
                    <td>{$row['business_phone']}</td>
                    <td>{$row['personal_email']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['state']}</td>
                    <td>
                        
                        <form action='{$_SERVER["PHP_SELF"]}' method='post'>
                            <input type='hidden' name='customerSelectedName' value='{$row['name']}'>
                            <input type='hidden' name='customerSelectedId' value='{$row['id']}'>

                            <button class='btn btn-sm btn-success' id='btnSelect'>
                                <i class='fa fa-check'></i>
                            </button>
                        </form>
                        
                        <a href='escolher_registro' class='btn btn-sm btn-danger' id='btnDelete'>
                            <i class='fa fa-trash-alt'></i>
                        </a>
                    </td>
                </tr>
            ";
        
        endwhile;
    endif;