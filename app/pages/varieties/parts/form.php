<?php require_once 'data_editing.php'; ?>

<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">
            <?php echo $cardHeaderText; ?>
        </h6>
    </div>

    <div class="card-body">

        <form action="./pages/varieties/actions/index.php?<?php echo $actionLink; ?>" method="post">

            <input type="hidden" name="varietyCreatedAt" value="<?php echo empty($varietyId) ? date('Y-m-d H:m:i') : $varietyCreatedAt; ?>" readonly>

            <?php
                if(!empty($varietyId)):
                    echo "
                        <input type='hidden' name='varietyId' value='{$varietyId}' readonly>
                    ";
                endif;
            ?>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="varietyName" class="form-label">Nome</label>
                    <input type="text" name="varietyName" id="varietyName" value="<?php echo @$varietyName; ?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="varietyCulture" class="form-label">Cultura</label>
                    <select name="varietyCulture" id="varietyCulture" class="form-control">

                        <option value="<?php echo !empty(@$_POST['varietyCulture']) ? $_POST['varietyCulture'] : ''; ?>">
                            <?php echo !empty(@$_POST['varietyCultureName']) ? $_POST['varietyCultureName'] : ''; ?>
                        </option>

                        <?php include('./pages/varieties/foreign_loops/cultures.php'); ?>
                    </select>
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