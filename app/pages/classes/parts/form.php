<?php require_once 'data_editing.php'; ?>

<div class="card shadow mb-4">

    <div class="card-header py-3 bg-dark d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-success">
            <?php echo $cardHeaderText; ?>
        </h6>

        <a class="btn btn-info btn-sm" href="<?php echo $_SERVER['PHP_SELF']; ?>">
            <i class="fa fa-plus-circle"></i>
            Novo
        </a>
    </div>

    <div class="card-body">

        <form action="./pages/classes/actions/index.php?<?php echo $actionLink; ?>" method="post">

            <input type="hidden" name="classCreatedAt" value="<?php echo empty($classId) ? date('Y-m-d H:m:i') : $classCreatedAt; ?>" readonly>

            <?php
                if(!empty($classId)):
                    echo "
                        <input type='hidden' name='classId' value='{$classId}' readonly>
                    ";
                endif;
            ?>

            <div class="row mb-6 mb-3">
                <div class="col-md-12">
                    <label for="className" class="form-label">Nome</label>
                    <input type="text" name="className" id="className" value="<?php echo @$className; ?>" class="form-control">
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