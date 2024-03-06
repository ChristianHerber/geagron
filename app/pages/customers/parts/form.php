<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Novo Cadastro</h6>
    </div>

    <div class="card-body">

        <form action="./pages/customers/actions/index.php">

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="customerName" class="form-label">Nome</label>
                    <input type="text" id="customerName" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="customerCpf" class="form-label">CPF</label>
                    <input type="text" id="customerCpf" class="form-control">
                </div>

                <div class="col-md-3">
                    <label for="customerHomePhone" class="form-label">Telefone Residencial</label>
                    <input type="text" id="customerHomePhone" class="form-control">
                </div>

                <div class="col-md-3">
                    <label for="customerBusinessPhone" class="form-label">Telefone Comercial</label>
                    <input type="text" id="customerBusinessPhone" class="form-control">
                </div>

                <div class="col-md-3">
                    <label for="customerMobilePhone" class="form-label">Celular</label>
                    <input type="text" id="customerMobilePhone" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="customerPersonalEmail" class="form-label">E-mail Pessoal</label>
                    <input type="email" id="customerPersonalEmail" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="customerBusinessEmail" class="form-label">E-mail Comercial</label>
                    <input type="email" id="customerBusinessEmail" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="customerCep" class="form-label">CEP</label>
                    <input type="text" id="customerCep" class="form-control cep">
                </div>

                <div class="col-md-9">
                    <label for="customerAddress" class="form-label">Endereço</label>
                    <input type="text" id="customerAddress" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="customerDistrict" class="form-label">Bairro</label>
                    <input type="text" id="customerDistrict" class="form-control">
                </div>

                <div class="col-md-5">
                    <label for="customerCity" class="form-label">Cidade</label>
                    <input type="text" id="customerCity" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="customerState" class="form-label">UF</label>
                    <input type="text" id="customerState" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="customerPs" class="form-label">Observações</label>
                    <textarea name="customerPs" id="customerPs" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-success">
                        <i class="fa fa-paper-plane"></i>
                        Cadastrar
                    </button>
                </div>
            </div>

        </form>

    </div>

</div>