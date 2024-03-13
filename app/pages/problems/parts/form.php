<?php require_once 'data_editing.php'; ?>

<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">
            <?php echo $cardHeaderText; ?>
        </h6>
    </div>

    <div class="card-body">

        <form action="./pages/problems/actions/index.php?<?php echo $actionLink; ?>" method="post">

            <input type="hidden" name="problemCreatedAt" value="<?php echo empty($cultureId) ? date('Y-m-d H:m:i') : $cultureCreatedAt; ?>" readonly>

            <?php
                if(!empty($problemId)):
                    echo "
                        <input type='hidden' name='problemId' value='{$problemId}' readonly>
                    ";
                endif;
            ?>

            <div class="row mb-6 mb-3">
                <div class="col-md-6">
                    <label for="problemName" class="form-label">Nome</label>
                    <input type="text" name="problemName" id="problemName" value="<?php echo @$problemName; ?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="problemPopularName" class="form-label">Nome Popular</label>
                    <input type="text" name="problemPopularName" id="problemPopularName" value="<?php echo @$problemPopularName; ?>" class="form-control">
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