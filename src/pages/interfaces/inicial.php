<!DOCTYPE html>
<html lang="pt-br">
<?php
    include("../../../connections/conexao.php");
    session_start();
    ?>
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Ótica</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
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
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php">CRUD Ótica  - BETA</a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="../../assets/images/logo-mini.svg" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
            <button type="button" class="btn btn-primary toolbar-item" onclick="window.location.href = '../../../../connections/login.php'">Sair</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                        </a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i class="mdi mdi-alert m-auto text-primary"></i>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i class="mdi mdi-settings m-auto text-primary"></i>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                                </div>
                            </a>
                        </div>
                    </li>
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
                        <a class="nav-link" href="cad-subgrupo.php">
                            <i class="menu-icon typcn typcn-user-outline"></i>
                            <span class="menu-title">Cadastro de Subgrupo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cad-marca.php">
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
                    <!-- Page Title Header Starts-->
                    <div class="row page-title-header">
                        <div class="col-12">
                            <div class="page-header">
                                <h4 class="page-title">Dashboard</h4>
                                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                                    <ul class="quick-links">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-toolbar">
                                <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                                    <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                                </div>
                                <div class="filter-wrapper">
                                    <div class="dropdown toolbar-item">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Todos os dias</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                                            <a class="dropdown-item" href="#">Last Day</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                    <a href="#" class="advanced-link toolbar-item">Opções avançadas</a>
                                </div>
                                <div class="sort-wrapper">
                                    <button type="button" class="btn btn-primary toolbar-item">Novo</button>
                                    <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exportar</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownexport">
                                            <a class="dropdown-item" href="#">Export as PDF</a>
                                            <a class="dropdown-item" href="#">Export as DOCX</a>
                                            <a class="dropdown-item" href="#">Export as CDR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Title Header Ends-->
                    <div class="row">
                        <div class="col-md-8 grid-margin stretch-card">
                                    <div class="d-flex flex-column flex-lg-row">
                                        <div class="data-wrapper d-flex mt-2 mt-lg-0">
                                            <div class="wrapper pr-5">
                                                <div class="d-flex align-items-center">
                                                </div>
                                            </div>
                                            <div class="wrapper">
                                                <div class="d-flex align-items-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                                    </div>
                                </div>
                        <div class="col-md-4 grid-margin stretch-card">
                                    <div class="wrapper">
                                        <div class="mb-4" id="net-profit-legend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mb-0">Tabela de produtos</h4>
                                    <a href="#"><small>Mostrar Todos</small></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Descrição</th>
                                                <th>Grupo</th>
                                                <th>sub-grupo</th>
                                                <th>marca</th>
                                                <th>Tipo</th>
                                                <th>Fornecedor</th>
                                                <th>Preço</th>
                                                <th>Promoção</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trasition</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lente para PC</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lente anti-reflexo</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>lente basica</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>lente filtro de luz azul</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                                <td>teste</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
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
    <script src="../../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>
</html>