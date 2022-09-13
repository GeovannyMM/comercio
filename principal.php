<?php
if(!empty($_POST['usuario']) && !empty($_POST['password'])){
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

if($usuario == "administrador"){
    if($password == "asd"){
        header("Location: principal.php");

    }else{
        header("Location: 401.html");
    }
}
if($usuario == "cliente"){
    if($password == "123"){
        header("Location: compras.php");

    }else{
        header("Location: 401.html");
    }
}

/*if($usuario ==""){
    if($password == ""){
        header("Location: 401.html");
    }

}*/

}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Proyecto 1er Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3">E-COMMERCE JG</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0 ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw" ></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="index.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">MENÚ</div>
                        <a class="nav-link" href="principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        

                       
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Más opciones</div>
                        <a class="nav-link" href="graficas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Registro de graficas
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">José Geovanny Mancilla Medina</div>
                    19270155
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Bienvenido</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">ADMINISTRADOR</li>
                    </ol>




                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">ENERO</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link">detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">FEBRERO</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6" >
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">MARZO</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link">detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">ABRIL</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" >detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Estadisticas del mes de Marzo
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Datos del Año
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            INVENTARIO
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>en existencia</th>
                                        <th>universo</th>
                                        <th>tipo</th>
                                        <th>fecha</th>
                                        <th>precio</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                        <th>Nombre</th>
                                        <th>en almacen</th>
                                        <th>universo</th>
                                        <th>tipo</th>
                                        <th>fecha</th>
                                        <th>precio</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    
                                    
                                    
                                    <tr>
                                        <td>Funko ace</td>
                                        <td>si</td>
                                        <td>One piece</td>
                                        <td>normal</td>
                                        <td>09/08/2022</td>
                                        <td>$500</td>
                                    </tr>
                                    <tr>
                                         <tr>
                                         <td>Funko Dead pool</td>
                                        <td>si</td>
                                        <td>Marvel</td>
                                        <td>Metalic</td>
                                        <td>09/08/2022</td>
                                        <td>$550</td>
                                    
                                    </tr>
                                    <tr>
                                    <td>Funko wolwerine</td>
                                        <td>si</td>
                                        <td>Marvel X-men</td>
                                        <td>accion</td>
                                        <td>09/08/2022</td>
                                        <td>$450</td>
                                    </tr>
                                    <tr>
                                    <td>Funko aquaman</td>
                                        <td>si</td>
                                        <td>Dc</td>
                                        <td>vinil</td>
                                        <td>09/08/2022</td>
                                        <td>$300</td>
                                    </tr>
                                    <tr>
                                    <td>Funko tokidoki</td>
                                        <td>no</td>
                                        <td>animation</td>
                                        <td>normal</td>
                                        <td>09/08/2022</td>
                                        <td>$500</td>
                                    </tr>
                                    <tr>
                                    <td>Funko baby yoda</td>
                                        <td>si</td>
                                        <td>Star Wars</td>
                                        <td>felpa</td>
                                        <td>09/08/2022</td>
                                        <td>$600</td>
                                    </tr>
                                    <tr>
                                    <td>Funko Harry Potter</td>
                                        <td>si</td>
                                        <td>wizard world</td>
                                        <td>limitado</td>
                                        <td>09/08/2022</td>
                                        <td>$1,500</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Tienda Online</div>
                        <div>
                            
                           
                            
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>