<?php

    require_once 'session_variables.php';
    require_once 'data_editing.php';

?>

<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success"><?php echo $cardHeaderText; ?></h6>

        <a class="btn btn-info btn-sm" href="<?php echo $_SERVER['PHP_SELF']; ?>">
            <i class="fa fa-plus-circle"></i>
            Novo
        </a>
    </div>

    <div class="card-body">

        <form action="./pages/properties/actions/index.php?<?php echo $actionLink; ?>" method="POST">

            <input type="hidden" name="propertyCreatedAt" value="<?php echo empty($propertyId) ? date('Y-m-d H:m:i') : $propertyCreatedAt; ?>" readonly>
            <input type="hidden" name="propertyCustomer" value="<?php echo $_SESSION['customer_id']; ?>" readonly>

            <?php
                if(!empty($propertyId)):
                    echo "
                        <input type='hidden' name='propertyId' value='{$propertyId}' readonly>
                    ";
                endif;
            ?>

            <div class="row mb-3">
                <div class="col-md-9">
                    <label for="propertyName" class="form-label">Nome</label>
                    <input type="text" name="propertyName" value="<?php echo @$propertyName; ?>" id="propertyName" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="propertyStateRegistration" class="form-label">Registro Estadual</label>
                    <input type="text" name="propertyStateRegistration" value="<?php echo @$propertyStateRegistration; ?>" id="propertyStateRegistration" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="propertyCEP" class="form-label">CEP</label>
                    <input type="text" name="propertyCEP" value="<?php echo @$propertyCep; ?>" id="propertyCEP" class="form-control cep">
                </div>
                <div class="col-md-9">
                    <label for="propertyAddress" class="form-label">Endereço</label>
                    <input type="text" name="propertyAddress" value="<?php echo @$propertyAddress; ?>" id="propertyAddress" class="form-control streetName">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="propertyDistrict" class="form-label">Bairro</label>
                    <input type="text" name="propertyDistrict" value="<?php echo @$propertyDistrict; ?>" id="propertyDistrict" class="form-control districtName">
                </div>

                <div class="col-md-5">
                    <label for="propertyCity" class="form-label">Cidade</label>
                    <input type="text" name="propertyCity" value="<?php echo @$propertyCity; ?>" id="propertyCity" class="form-control cityName">
                </div>

                <div class="col-md-2">
                    <label for="propertyState" class="form-label">UF</label>
                    <input type="text" name="propertyState" value="<?php echo @$propertyState; ?>" id="propertyState" class="form-control stateName">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="propertyCultivatedArea" class="form-label">Área Cultivada</label>
                    <input type="number" name="propertyCultivatedArea" value="<?php echo @$propertyCultivatedArea; ?>" id="propertyCultivatedArea" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="propertyTotalArea" class="form-label">Área Total</label>
                    <input type="number" name="propertyTotalArea" value="<?php echo @$propertyTotalArea; ?>" id="propertyTotalArea" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-success">
                        <i class="fa fa-paper-plane"></i>
                        <?php echo $btnLabel; ?>
                    </button>
                </div>
            </div>

        </form>

    </div>

</div>