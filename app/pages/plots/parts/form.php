<?php require_once 'data_editing.php'; ?>

<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">Novo Cadastro</h6>

        <a class="btn btn-info btn-sm" href="<?php echo $_SERVER['PHP_SELF']; ?>">
            <i class="fa fa-plus-circle"></i>
            Novo
        </a>
    </div>

    <div class="card-body">

        <form action="./pages/plots/actions/index.php?<?php echo $actionLink; ?>" method="post">

            <input type="hidden" name="plotCreatedAt" value="<?php echo empty($plotId) ? date('Y-m-d H:m:i') : $plotCreatedAt; ?>" readonly>
            <input type="hidden" name="plotProperty" value="<?php echo $_SESSION['property_id']; ?>" readonly>

            <?php
                if(!empty($plotId)):
                    echo "
                        <input type='hidden' name='plotId' value='{$plotId}' readonly>
                    ";
                endif;
            ?>


            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="plotName" class="form-label">Nome</label>
                    <input type="text" name="plotName" id="plotName" value="<?php echo @$plotName; ?>" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="plotCultivatedArea" class="form-label">Área Cultivada</label>
                    <input type="number" name="plotCultivatedArea" id="plotCultivatedArea" value="<?php echo @$plotCultivatedArea; ?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="plotTotalArea" class="form-label">Área Total</label>
                    <input type="number" name="plotTotalArea" id="plotTotalArea" value="<?php echo @$plotTotalArea; ?>" class="form-control">
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