<!DOCTYPE html>
<?php
    session_start();
?> 

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Ótica - Cadastro - Grupo/Subgrupo</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="../../index.html">
                    <a class="navbar-brand brand-logo" href="../../index.php">CRUD Ótica </a>
                    <a class="navbar-brand brand-logo-mini" href="../../index.html">
                        <img src="../../assets/images/logo-mini.svg" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown language-dropdown">
                        <div class="d-inline-flex mr-0 mr-md-3">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                            <div class="dropdown-divider"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item preview-item py-3">
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
                </div>
        </nav>
       <!-- partial -->
       <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="../../assets/images/faces/face8.jpg" alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name"> Olá, <?php echo $_SESSION['nome'];?>
                            </p>
                                <p class="designation">Administrador</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="inicial.php">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-user.php">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Cadastro de Usuários</span>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-grupo.php">
                            <i class="menu-icon typcn typcn-shopping-bag"></i>
                            <span class="menu-title">Cadastro de Grupos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-tipo.php">
                            <i class="menu-icon typcn typcn-th-large-outline"></i>
                            <span class="menu-title">Cadastro de Tipos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-fornecedor.php">
                            <i class="menu-icon typcn typcn-bell"></i>
                            <span class="menu-title">Cadastro de Fornecedores</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-produto.php">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">Cadastro de Produto</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-desconto.php">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">Cadastro de Desconto</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-subgrupo">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">Cadastro de Subgrupo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-subgrupo">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">Cadastro de Marca</span>
                        </a>
                    </li>
                        <div class="collapse" id="auth">
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch grid-margin">
                            <div class="row flex-grow">
                                <div class="col-12 stretch-card">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Formulário Cadastro Marca</h4>
                                <p class="card-description">Cadastro de Marca</p>
                                <form class="forms-sample" action="../../../connections/connection-cadmarca.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Descrição da marca</label>
                                        <input type="text" class="form-control" id="descricao" placeholder="Descrição da marca" name="descricao">
                                    </div>
                                    <button type="submit" class="btn btn-success mr-2">Cadastrar</button>
                                    <button class="btn btn-light">Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Anakinjs</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="../../assets/js/shared/off-canvas.js"></script>
        <script src="../../assets/js/shared/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
        <!-- End custom js for this page-->
</body>

</html>