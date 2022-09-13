<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

        <title>comprar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body>

        <?php
    $carrito_mio=$_SESSION['carrito'];
    $_SESSION['carrito']=$carrito_mio;
    
    // contamos nuestro carrito
    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if($carrito_mio[$i]!=NULL){ 
        $total_cantidad = $carrito_mio['cantidad'];
        $total_cantidad ++ ;
        $totalcantidad += $total_cantidad;
        }
    }
}

    ?>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito de Compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
                                      ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> $</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
							}
							}
							?>

                    
                            
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (MX)</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
                        }
                    }

                    
							echo $total; ?> $</strong>
                            

							</li>
						</ul>
					</div>
				</div>
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <!--<button-- type="button" class="btn btn-primary">Vaciar carrito</button-->
        <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>


<!-- ********************************************************************************************************************************************* -->
<!-- Este es el Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">E-COMMERCE JG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Opciones</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                                <li><a class="dropdown-item" href="index.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                    

 

                   <form class="d-flex">


                   <!--    boton Carrito -->
                    
                        <button  type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                           
                        <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <?php if(!empty($fullname)) {?>
                            <?php echo $totalcantidad; ?>
                            <?php }?>
                            
                            
                            <!--<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>-->
                        </button>
                        

                    </form>
                </div>
            </div>
        </nav>


        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bienvenido</h1>
                    <p class="lead fw-normal text-white-50 mb-0">La mayor variedad para tu colección</p>
                </div>
            </div>
        </header>


        <!-- PRODUCTOS-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">

                                 <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                            <!-- Product image-->
                            <img class="card-img-top" src="https://images.action-figure.org/l-m/pop-deadpool-two-swords-marvel-comics-action.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Dead Pool</h5>
                                    <!-- Product price-->
                                    $400.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div type="submit" class="text-center"><a class="btn btn-outline-dark mt-auto">Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">

                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOg9TSitY3visrIJVrTV21w6aj-7X43VERAIVo7UqyehTA4UqTChuPsaZYrup5IkoINUE&usqp=CAU" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Dumbo "Special edition"</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$3000.00</span>
                                    $2600.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKty3g8TkkMeyT-nqxkWPDjg0I87v5u9dgMA&usqp=CAU" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Vegeta</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$500.00</span>
                                    $450.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_821383-MLA49179963291_022022-O.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Tanjiro Kamado</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $850.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_652947-MLM40566278386_012020-O.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Coraline pijama</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$1600.00</span>
                                    $1450.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_882864-MLM49944007642_052022-O.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Spiderman Metalic</h5>
                                    <!-- Product price-->
                                    $420.00 - $580.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto" >Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_854391-MLA48352602963_112021-O.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Obito</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$800.00</span>
                                    $700.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="10" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://images.stockx.com/images/Funko-Pop-Harry-Potter-Harry-Potter-18-Inch-Figure-01.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1607122962" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Funko Harry Potter</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $1220.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto" >Agregar al carrito</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Derechos Reservados :) &copy; Funko Pop Mania</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
