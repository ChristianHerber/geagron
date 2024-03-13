<?php

require_once 'connection/index.php';

$productsList = "SELECT
        p.*,
        p.status as Status,
        c.name as ClassName,
        i.dosage as Dosage,
        p2.name as ProblemName,
        c.name as CultureName
    FROM products p
    INNER JOIN classes c ON c.id = p.class_id
    INNER JOIN indications i ON i.product_id = p.id
    INNER JOIN problems p2 ON i.problem_id = p2.id
    INNER JOIN cultures c2 ON i.culture_id = c2.id;
";

$result = $conexao->query($productsList);

$date = date('Y-m-d');

if($result->num_rows > 0):
    while($row = $result->fetch_assoc()):

    echo "
        <tr>
            <td>
                <form action='products.php' method='post'>
                
                    <input type='hidden' name='productCreatedAt' value='{$row['created_at']}'>
                    <input type='hidden' name='productId' value='{$row['id']}'>
                    <input type='hidden' name='productName' value='{$row['name']}'>
                    <input type='hidden' name='productActiveIngredient' value='{$row['active_ingredient']}'>
                    <input type='hidden' name='productConcentration' value='{$row['concentration']}'>
                    <input type='hidden' name='productPhysicalState' value='{$row['physical_state']}'>
                    <input type='hidden' name='productClass' value='{$row['class_id']}'>
                    <input type='hidden' name='productClassName' value='{$row['ClassName']}'>
                    <input type='hidden' name='productToxicClass' value='{$row['toxic_class']}'>
                    <input type='hidden' name='productUnit' value='{$row['unit']}'>
                    <input type='hidden' name='productFlammable' value='{$row['flammable']}'>
                    <input type='hidden' name='productCorrosive' value='{$row['corrosive']}'>
                    <input type='hidden' name='productEnvironmentalClassification' value='{$row['environmental_classification']}'>
                    <input type='hidden' name='productChemicalGroup' value='{$row['chemical_group']}'>
                    <input type='hidden' name='productFormulation' value='{$row['formulation']}'>
                    <input type='hidden' name='productActionMode' value='{$row['action_mode']}'>
                    <input type='hidden' name='productApplicationTechnology' value='{$row['application_technology']}'>
                    <input type='hidden' name='productMapaNumber' value='{$row['mapa_number']}'>
                    <input type='hidden' name='productRecordHolder' value='{$row['record_holder']}'>
                    <input type='hidden' name='productStatus' value='{$row['status']}'>
                    <input type='hidden' name='productApplications' value='{$row['applications']}'>
                    <input type='hidden' name='productPackaging' value='{$row['packaging']}'>

                    <button class='btn btn-link'>
                        {$row['name']}
                    </button>
                </form>
            </td>
            <td>{$row['active_ingredient']}</td>
            <td>{$row['ClassName']}</td>
            <td>{$row['mapa_number']}</td>
            <td>{$row['status']}</td>
            <td>
                <button 
                    class='btn btn-sm btn-danger ml-2' 
                    id='btnProductDelete'
                    link='./pages/products/actions/index.php?action=3&productId={$row['id']}'
                >
                    <i class='fa fa-trash-alt'></i>
                </button>
            </td>
        </tr>
    ";

    endwhile;
endif;