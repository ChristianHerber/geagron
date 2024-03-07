<?php

    @$customerId = htmlspecialchars($_POST['customerId']);

    if(!empty($customerId )):
        $customerCreatedAt     = htmlspecialchars($_POST['customerCreatedAt']);
        $customerName          = htmlspecialchars($_POST['customerName']);
        $customerCpf           = htmlspecialchars($_POST['customerCpf']);
        $customerHomePhone     = htmlspecialchars($_POST['customerHomePhone']);
        $customerBusinessPhone = htmlspecialchars($_POST['customerBusinessPhone']);
        $customerMobilePhone   = htmlspecialchars($_POST['customerMobilePhone']);
        $customerPersonalEmail = htmlspecialchars($_POST['customerPersonalEmail']);
        $customerBusinessEmail = htmlspecialchars($_POST['customerBusinessEmail']);
        $customerCep           = htmlspecialchars($_POST['customerCep']);
        $customerAddress       = htmlspecialchars($_POST['customerAddress']);
        $customerDistrict      = htmlspecialchars($_POST['customerDistrict']);
        $customerCity          = htmlspecialchars($_POST['customerCity']);
        $customerState         = htmlspecialchars($_POST['customerState']);
        $customerPs            = htmlspecialchars($_POST['customerPs']);

        $actionLink = 'action=2';
        $btnLabel = 'Atualizar';
        $cardHeaderText = 'Atualizar Cadastro';

    else:

        $actionLink = 'action=1';
        $btnLabel = 'Cadastrar';
        $cardHeaderText = 'Novo Cadastro';

    endif;

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

        <form action="./pages/customers/actions/index.php?<?php echo $actionLink; ?>" method="POST">

            <input type="hidden" name="customerCreatedAt" value="<?php echo empty($customerId) ? date('Y-m-d') : $customerCreatedAt; ?>" readonly>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="customerName" class="form-label">Nome</label>                   
                    <input type="text" name="customerName" id="customerName" class="form-control" value="<?php echo @$customerName; ?>" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="customerCpf" class="form-label">CPF</label>
                    <input type="text" name="customerCpf" id="customerCpf" class="form-control cpf" value="<?php echo @$customerCpf; ?>">
                </div>

                <div class="col-md-3">
                    <label for="customerHomePhone" class="form-label">Telefone Residencial</label>
                    <input type="text" name="customerHomePhone" id="customerHomePhone" class="form-control phone" value="<?php echo @$customerHomePhone; ?>">
                </div>

                <div class="col-md-3">
                    <label for="customerBusinessPhone" class="form-label">Telefone Comercial</label>
                    <input type="text" name="customerBusinessPhone" id="customerBusinessPhone" class="form-control phone" value="<?php echo @$customerBusinessPhone; ?>">
                </div>

                <div class="col-md-3">
                    <label for="customerMobilePhone" class="form-label">Celular</label>
                    <input type="text" name="customerMobilePhone" id="customerMobilePhone" class="form-control phone" value="<?php echo @$customerMobilePhone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="customerPersonalEmail" class="form-label">E-mail Pessoal</label>
                    <input type="email" name="customerPersonalEmail" id="customerPersonalEmail" class="form-control" value="<?php echo @$customerPersonalEmail; ?>">
                </div>

                <div class="col-md-6">
                    <label for="customerBusinessEmail" class="form-label">E-mail Comercial</label>
                    <input type="email" name="customerBusinessEmail" id="customerBusinessEmail" class="form-control" value="<?php echo @$customerBusinessEmail; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="customerCep" class="form-label">CEP</label>
                    <input type="text" name="customerCep" id="customerCep" class="form-control cep" value="<?php echo @$customerCep; ?>">
                </div>

                <div class="col-md-9">
                    <label for="customerAddress" class="form-label">Endereço</label>
                    <input type="text" name="customerAddress" id="customerAddress" class="form-control streetName" value="<?php echo @$customerAddress; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="customerDistrict" class="form-label">Bairro</label>
                    <input type="text" name="customerDistrict" id="customerDistrict" class="form-control districtName" value="<?php echo @$customerDistrict; ?>">
                </div>

                <div class="col-md-5">
                    <label for="customerCity" class="form-label">Cidade</label>
                    <input type="text" name="customerCity" id="customerCity" class="form-control cityName" value="<?php echo @$customerCity; ?>">
                </div>

                <div class="col-md-2">
                    <label for="customerState" class="form-label">UF</label>
                    <input type="text" name="customerState" id="customerState" class="form-control stateName" value="<?php echo @$customerState; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="customerPs" class="form-label">Observações</label>
                    <textarea name="customerPs" id="customerPs" class="form-control">
                        <?php echo @$customerPs; ?>
                    </textarea>
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