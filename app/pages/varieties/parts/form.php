<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Novo Cadastro</h6>
    </div>

    <div class="card-body">

        <form action="./pages/varities/actions/index.php">

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="varietyName" class="form-label">Nome</label>
                    <input type="text" id="varietyName" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="varietyCultureName" class="form-label">Cultura</label>
                    <input type="text" id="varietyCultureName" class="form-control">
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