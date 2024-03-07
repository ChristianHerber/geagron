<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">Novo Cadastro</h6>
    </div>

    <div class="card-body">

        <form action="./pages/plots/actions/index.php">

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="plotName" class="form-label">Nome</label>
                    <input type="text" id="plotName" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="plotCultivatedArea" class="form-label">Área Cultivada</label>
                    <input type="number" id="plotCultivatedArea" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="plotTotalArea" class="form-label">Área Total</label>
                    <input type="number" id="plotTotalArea" class="form-control">
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