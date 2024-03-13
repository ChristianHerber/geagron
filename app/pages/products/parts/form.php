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

        <form action="./pages/products/actions/index.php?<?php echo $actionLink; ?>" method="post">

            <input type="hidden" name="productsCreatedAt" value="<?php echo empty($productsId) ? date('Y-m-d H:m:i') : $productsCreatedAt; ?>" readonly>

            <?php
                if(!empty($productId)):
                    echo "
                        <input type='hidden' name='productId' value='{$productId}' readonly>
                    ";
                endif;
            ?>

            <div class="row mb-6 mb-3">
                <div class="col-md-4">
                    <label for="productName" class="form-label">Nome</label>
                    <input type="text" name="productName" id="productName" value="<?php echo @$productName; ?>" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="productActiveIngredient" class="form-label">Igredient Ativo</label>
                    <input type="text" name="productActiveIngredient" id="productActiveIngredient" value="<?php echo @$productActiveIngredient; ?>" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="productConcentration" class="form-label">Concentração I.A.</label>
                    <input type="text" name="productConcentration" id="productConcentration" value="<?php echo @$productConcentration; ?>" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="productPhysicalState" class="form-label">Estado Físico</label>
                    <input type="text" name="productPhysicalState" id="productPhysicalState" value="<?php echo @$productPhysicalState; ?>" class="form-control">
                </div>
            </div>

            <div class="row mb-6 mb-3">
                <div class="col-md-4">
                    <label for="productClassName" class="form-label">Classe</label>
                    <select name="productClass" id="productClass" class="form-control">

                        <option value="<?php echo !empty(@$_POST['productClass']) ? $_POST['productClass'] : ''; ?>">
                            <?php echo !empty(@$_POST['productClassName']) ? $_POST['productClassName'] : ''; ?>
                        </option>

                        <?php include('./pages/products/foreign_loops/classes.php'); ?>
                    </select>
                </div>

                <div class="col-md-3">

                    <?php
                        /**
                         * Verifica o valor do campo e aplica a cor do background
                         */
                        if(!empty(@$_POST['productToxicClass'])){
                            @$_POST['productToxicClass'] === 'I - Extremamente Tóxico' ? $bg = 'bg-danger text-white' : '';
                            @$_POST['productToxicClass'] === 'II - Altamente Tóxico' ? $bg = 'bg-warning text-dark' : '';
                            @$_POST['productToxicClass'] === 'III - Medianamente Tóxico' ? $bg = 'bg-info text-white' : '';
                            @$_POST['productToxicClass'] === 'IV - Pouco Tóxico' ? $bg = 'bg-success text-white' : '';
                        }
                    ?>

                    <label for="productToxicClass" class="form-label">Classe Toxicológia</label>
                    <select name="productToxicClass" id="productToxicClass" class="form-control <?php echo $bg; ?>">

                        <option value="<?php echo !empty(@$_POST['productId']) ? $_POST['productId'] : ''; ?>">
                            <?php echo !empty(@$_POST['productToxicClass']) ? $_POST['productToxicClass'] : ''; ?>
                        </option>

                        <option value="I - Extremamente Tóxico">I - Extremamente Tóxico</option>
                        <option value="II - Altamente Tóxico">II - Altamente Tóxico</option>
                        <option value="III - Medianamente Tóxico">III - Medianamente Tóxico</option>
                        <option value="IV - Pouco Tóxico">IV - Pouco Tóxico</option>
                    </select>
                </div>

                <div class="col-md-1">
                    <label for="productUnit" class="form-label">Unidade</label>
                    <select name="productUnit" id="productUnit" class="form-control">

                        <option value="<?php echo !empty(@$_POST['productUnit']) ? $_POST['productUnit'] : ''; ?>">
                            <?php echo !empty(@$_POST['productUnit']) ? $_POST['productUnit'] : ''; ?>
                        </option>

                        <option value="ML">ML</option>
                        <option value="LT">LT</option>
                        <option value="GR">GR</option>
                        <option value="KG">KG</option>
                        <option value="TN">TN</option>
                        <option value="UN">UN</option>


                    </select>
                </div>

                <div class="col-md-2">
                    <label for="productFlammable" class="form-label">Inflamável</label>
                    <select name="productFlammable" id="productFlammable" class="form-control">

                        <option value="<?php echo !empty(@$_POST['productFlammable']) ? $_POST['productFlammable'] : ''; ?>">
                            <?php echo !empty(@$_POST['productFlammable']) ? $_POST['productFlammable'] : ''; ?>
                        </option>

                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>

                    </select>
                </div>

                <div class="col-md-2">
                    <label for="productCorrosive" class="form-label">Corrosivo</label>
                    <select name="productCorrosive" id="productCorrosive" class="form-control">

                        <option value="<?php echo !empty(@$_POST['productCorrosive']) ? $_POST['productCorrosive'] : ''; ?>">
                            <?php echo !empty(@$_POST['productCorrosive']) ? $_POST['productCorrosive'] : ''; ?>
                        </option>

                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>

                    </select>
                </div>
            </div>

            <div class="row mb-6 mb-3">
                <div class="col-md-4">
                    <label for="productEnvironmentalClassification" class="form-label">Classificação Ambiental</label>
                    <input type="text" name="productEnvironmentalClassification" id="productEnvironmentalClassification" value="<?php echo @$productEnvironmentalClassification; ?>" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="productChemicalGroup" class="form-label">Grupo Químico</label>
                    <input type="text" name="productChemicalGroup" id="productChemicalGroup" value="<?php echo @$productChemicalGroup; ?>" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="productFormulation" class="form-label">Formulação</label>
                    <input type="text" name="productFormulation" id="productFormulation" value="<?php echo @$productFormulation; ?>" class="form-control">
                </div>
            </div>

            <div class="row mb-6 mb-3">

                <div class="col-md-5">
                    <label for="productActionMode" class="form-label">Mode de Ação</label>
                    <input type="text" name="productActionMode" id="productActionMode" value="<?php echo @$productActionMode; ?>" class="form-control">
                </div>

                <div class="col-md-5">
                    <label for="productApplicationTechnology" class="form-label">Tecnologia de Aplicação</label>
                    <input type="text" name="productApplicationTechnology" id="productApplicationTechnology" value="<?php echo @$productApplicationTechnology; ?>" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="productMapaNumber" class="form-label">Nº MAPA</label>
                    <input type="number" name="productMapaNumber" id="productMapaNumber" value="<?php echo @$productMapaNumber; ?>" class="form-control">
                </div>

            </div>

            <div class="row mb-6 mb-3">
                <div class="col-md-8">
                    <label for="productRecordHolder" class="form-label">Titular do Registro</label>
                    <input type="text" name="productRecordHolder" id="productRecordHolder" value="<?php echo @$productRecordHolder; ?>" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="productStatus" class="form-label">Status</label>
                    <input type="text" name="productStatus" id="productStatus" value="<?php echo @$productStatus; ?>" class="form-control">
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