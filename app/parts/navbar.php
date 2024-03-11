                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="infoSelecteds">
                        <a href="customers.php#customersList" class="nav-link">
                            
                            <?php 
                                if(isset($_SESSION['customer_name'])){
                                    echo "
                                        <span class='mr-1 d-lg-inline border-0 small alert m-0 alert-info py-2 px-4'>
                                            <strong class='d-none d-lg-inline'>Cliente:</strong> {$_SESSION['customer_name']}
                                        </span>
                                    ";
                                } else {
                                    echo "
                                        <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-danger py-2 px-4'>
                                            <i class='fa fa-exclamation-triangle'></i>
                                            <span class='d-none d-lg-inline'>Selecione um</span> <strong>Cliente!</strong>
                                        </span>
                                    ";
                                }
                            ?>
                        </a>

                        <a href='properties.php#propertiesList' class="nav-link">
                            <?php 
                                if(isset($_SESSION['property_name'])){
                                    echo "
                                        <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-info py-2 px-4'>
                                            <strong class='d-none d-lg-inline'>Propriedade:</strong> {$_SESSION['property_name']}
                                        </span>
                                    ";
                                } else {
                                    echo "
                                        <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-danger py-2 px-4'>
                                            <i class='fa fa-exclamation-triangle'></i>
                                            <span class='d-none d-lg-inline'>Selecione uma</span> <strong>Propriedade!</strong>
                                        </span>
                                    ";
                                }
                            ?>
                        </a>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- <li class="nav-item dropdown no-arrow">
                            <a href="customers.php#customersList" class="nav-link dropdown-toggle">
                                
                                <?php 
                                    if(isset($_SESSION['customer_name'])){
                                        echo "
                                            <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-info py-2 px-4'>
                                                <strong class='d-none d-lg-inline'>Cliente:</strong> {$_SESSION['customer_name']}
                                            </span>
                                        ";
                                    } else {
                                        echo "
                                            <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-danger py-2 px-4'>
                                                <i class='fa fa-exclamation-triangle'></i>
                                                Selecione um <strong>Cliente!</strong>
                                            </span>
                                        ";
                                    }
                                ?>
                            </a>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a href='properties.php#propertiesList' class="nav-link dropdown-toggle">
                                <?php 
                                    if(isset($_SESSION['property_name'])){
                                        echo "
                                            <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-info py-2 px-4'>
                                                <strong class='d-none d-lg-inline'>Propriedade:</strong> {$_SESSION['property_name']}
                                            </span>
                                        ";
                                    } else {
                                        echo "
                                            <span class='mr-2 d-lg-inline border-0 small alert m-0 alert-danger py-2 px-4'>
                                                <i class='fa fa-exclamation-triangle'></i>
                                                Selecione uma <strong>Propriedade!</strong>
                                            </span>
                                        ";
                                    }
                                ?>
                            </a>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $fullname; ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-power-off fa-sm fa-fw mr-2 text-danger"></i>
                                    Sair do Sistema
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->