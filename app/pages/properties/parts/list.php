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

                    <input type='hidden' name='propertyId' value='{$row['id']}'>
                    <input type='hidden' name='propertyName' value='{$row['name']}'>
                    <input type='hidden' name='propertyStateRegistration' value='{$row['state_registration']}'>
                    <input type='hidden' name='propertyCep' value='{$row['cep']}'>
                    <input type='hidden' name='propertyAddress' value='{$row['address']}'>
                    <input type='hidden' name='propertyDistrict' value='{$row['district']}'>
                    <input type='hidden' name='propertyCity' value='{$row['city']}'>
                    <input type='hidden' name='propertyState' value='{$row['state']}'>
                    <input type='hidden' name='propertyCultivatedArea' value='{$row['cultivated_area']}'>
                    <input type='hidden' name='propertyTotalArea' value='{$row['total_area']}'>
                    <input type='hidden' name='propertyCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='propertyUpdatedAt' value='{$date}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>

                </form>
            </td>
            <td>{$row['state_registration']}</td>
            <td>{$row['city']}</td>
            <td>{$row['state']}</td>
            <td class='d-flex'>
                <a href='escolher_registro' class='btn btn-sm btn-success' id='btnSelect'>
                    <i class='fa fa-check'></i>
                </a>

                <button 
                    class='btn btn-sm btn-danger ml-2'
                    id='btnPropertyDelete'
                    link='./pages/properties/actions/index.php?action=3&propertyId={$row['id']}'
                >
                    <i class='fa fa-trash-alt'></i>
                </button>
            </td>
        </tr>
    ";

    endwhile;
endif;