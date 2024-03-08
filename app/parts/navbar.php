                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a href="customers.php#customersList" class="nav-link dropdown-toggle">
                                
                                <?php 
                                    if(isset($_SESSION['customer_name'])){
                                        echo "
                                            <span class='mr-2 d-none d-lg-inline border-0 small alert m-0 alert-info py-2 px-4'>
                                                <strong>Cliente:</strong> {$_SESSION['customer_name']}
                                            </span>
                                        ";
                                    } else {
                                        echo "
                                            <span class='mr-2 d-none d-lg-inline border-0 small alert m-0 alert-danger py-2 px-4'>
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
                                            <span class='mr-2 d-none d-lg-inline border-0 small alert m-0 alert-info py-2 px-4'>
                                                <strong>Cliente:</strong> {$_SESSION['property_name']}
                                            </span>
                                        ";
                                    } else {
                                        echo "
                                            <span class='mr-2 d-none d-lg-inline border-0 small alert m-0 alert-danger py-2 px-4'>
                                                <i class='fa fa-exclamation-triangle'></i>
                                                Selecione uma <strong>Propriedade!</strong>
                                            </span>
                                        ";
                                    }
                                ?>
                            </a>
                        </li>

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
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->