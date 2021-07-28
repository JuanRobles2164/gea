<!DOCTYPE html>
<html lang="es">
    <head>
        <title>GEA</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    
        <!-- Favicon icon -->
        <link rel="icon" href="resources/assets/images/favicon.svg" type="image/x-icon">
    
        <!-- font css -->
        <link rel="stylesheet" href="assets/fonts/feather.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome.css">
        <link rel="stylesheet" href="assets/fonts/material.css">
    
        <!-- vendor css -->
        <link rel="stylesheet" href="assets/css/style.css" id="main-style-link">
    
    </head>
    
    <body class="">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        <!-- [ Mobile header ] start -->
        <div class="pc-mob-header pc-header">
            <div class="pcm-logo">
                <img src="assets/images/logo.svg" alt="" class="logo logo-lg">
            </div>
            <div class="pcm-toolbar">
                <a href="#!" class="pc-head-link" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                    <i data-feather="align-right"></i>
                </a>
                <a href="#!" class="pc-head-link" id="header-collapse">
                    <i data-feather="more-vertical"></i>
                </a>
            </div>
        </div>
        <!-- [ Mobile header ] End -->
    
        <!-- [ navigation menu ] start -->
        <nav class="pc-sidebar ">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="index.blade.php" class="b-brand">
                        <!-- ========   change your logo hear   ============ -->
                        <img src="assets/images/logogea.jfif" alt="" class="logo logo-lg">
                        <img src="assets/images/logo-sm.svg" alt="" class="logo logo-sm">
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Menu Level 2.1</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Menu level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                                        <li class="pc-item pc-hasmenu">
                                            <a href="#!" class="pc-link">Menu level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                            <ul class="pc-submenu">
                                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Menu level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                                        <li class="pc-item pc-hasmenu">
                                            <a href="#!" class="pc-link">Menu level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                            <ul class="pc-submenu">
                                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ navigation menu ] end -->
        <!-- [ Header ] start -->
        <header class="pc-header ">
            <div class="header-wrapper">
                <div class="mr-auto pc-mob-drp">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Level
                            </a>
                            <div class="dropdown-menu pc-h-dropdown">
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">account_circle</i>
                                    <span>Mi Cuenta</span>
                                </a>
                                <div class="pc-level-menu">
                                    <a href="#!" class="dropdown-item">
                                        <i class="material-icons-two-tone">list_alt</i>
                                        <span class="float-right"><i data-feather="chevron-right" class="mr-0"></i></span>
                                        <span>Level2.1</span>
                                    </a>
                                    <div class="dropdown-menu pc-h-dropdown">
                                        <a href="#!" class="dropdown-item">
                                            <i class="fas fa-circle"></i>
                                            <span>Mi cuenta</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="fas fa-circle"></i>
                                            <span>Configuracion</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="fas fa-circle"></i>
                                            <span>Soporte</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="fas fa-circle"></i>
                                            <span>Mis proyectos</span>
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            <i class="fas fa-circle"></i>
                                            <span>Cerrar sesion</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">settings</i>
                                    <span>Configuracion</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">support</i>
                                    <span>Soporte</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">https</i>
                                    <span>Mis proyectos</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">chrome_reader_mode</i>
                                    <span>Cerrar sesion</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="material-icons-two-tone">search</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                                <form class="px-3">
                                    <div class="form-group mb-0 d-flex align-items-center">
                                        <i data-feather="search"></i>
                                        <input type="search" class="form-control border-0 shadow-none" placeholder="Buscar . . .">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/user/avatar.png" alt="user-image" class="user-avtar">
                                <span>
                                    <span class="user-name">Gabriel Castro</span>
                                    <span class="user-desc">Administrator</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                                <a href="#" class="dropdown-item">
                                    <i class="material-icons-two-tone">chrome_reader_mode</i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
    
            </div>
        </header>
        <!-- [ Header ] end -->
    
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
    
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/plugins/feather.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>

    
    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    
    <!-- custom-chart js -->
    <script src="assets/js/pages/dashboard-sale.js"></script>
    </body>
    
    </html>
    
