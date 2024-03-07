<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">Novo Cadastro</h6>
    </div>

    <div class="card-body">

        <form action="./pages/plots/actions/index.php">

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="cultureName" class="form-label">Nome</label>
                    <input type="text" id="cultureName" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="cultureScientificName" class="form-label">Nome Científico</label>
                    <input type="text" id="cultureScientificName" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="cultureGroup" class="form-label">Grupo</label>
                    <input type="text" id="cultureGroup" class="form-control">
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