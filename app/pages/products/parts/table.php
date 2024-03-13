<div class="card border-0 shadow mb-4">
    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">Cadastrados</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingrediente Ativo</th>
                        <th>Classe</th>
                        <th>Nº MAPA</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Ingrediente Ativo</th>
                        <th>Classe</th>
                        <th>Nº MAPA</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php require_once 'list.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>