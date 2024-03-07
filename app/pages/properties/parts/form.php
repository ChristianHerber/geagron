<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">Novo Cadastro</h6>
    </div>

    <div class="card-body">

        <form action="./pages/properties/actions/index.php">

            <div class="row mb-3">
                <div class="col-md-9">
                    <label for="propertyName" class="form-label">Nome</label>
                    <input type="text" id="propertyName" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="propertyStateRegistration" class="form-label">Registro Estadual</label>
                    <input type="text"id="propertyStateRegistration" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="propertyCEP" class="form-label">CEP</label>
                    <input type="text" id="propertyCEP" class="form-control cep">
                </div>
                <div class="col-md-9">
                    <label for="propertyAddress" class="form-label">Endereço</label>
                    <input type="text" id="propertyAddress" class="form-control streetName">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="propertyDistrict" class="form-label">Bairro</label>
                    <input type="text" id="propertyDistrict" class="form-control districtName">
                </div>

                <div class="col-md-5">
                    <label for="propertyCity" class="form-label">Cidade</label>
                    <input type="text" id="propertyCity" class="form-control cityName">
                </div>

                <div class="col-md-2">
                    <label for="propertyState" class="form-label">UF</label>
                    <input type="text" id="propertyState" class="form-control stateName">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="propertyCultivatedArea" class="form-label">Área Cultivada</label>
                    <input type="number" id="propertyCultivatedArea" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="propertyTotalArea" class="form-label">Área Total</label>
                    <input type="number" id="propertyTotalArea" class="form-control">
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