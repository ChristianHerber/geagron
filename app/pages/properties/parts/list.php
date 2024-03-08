<?php


require_once 'connection/index.php';

$propertiesList = "SELECT * FROM properties WHERE deleted_at is null";

$result = $conexao->query($propertiesList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='properties.php' method='POST'>

                    <input type='text' name='propertyId' value='{$row['id']}'>
                    <input type='text' name='propertyName' value='{$row['name']}'>
                    <input type='text' name='propertyStateRegistration' value='{$row['state_registration']}'>
                    <input type='text' name='propertyCep' value='{$row['cep']}'>
                    <input type='text' name='propertyAddress' value='{$row['address']}'>
                    <input type='text' name='propertyDistrict' value='{$row['district']}'>
                    <input type='text' name='propertyCity' value='{$row['city']}'>
                    <input type='text' name='propertyState' value='{$row['state']}'>
                    <input type='text' name='propertyCultivatedArea' value='{$row['cultivated_area']}'>
                    <input type='text' name='propertyTotalArea' value='{$row['total_area']}'>
                    <input type='text' name='propertyCreatedAt' value='{$row['created_at']}'>
                    <input type='text' name='propertyUpdatedAt' value='{$date}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>

                </form>
            </td>
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