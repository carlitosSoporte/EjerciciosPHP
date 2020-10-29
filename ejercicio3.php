<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title> EJERCICIOS PHP</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">
                    <img src="recursos/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo" loading="lazy">
                </a>
                <a class="navbar-brand" href="index.php" id="textoPrincipal">Ejercicios PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ejercicios 1-5
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="ejercicio1.php">Ejercicio 1</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio2.php">Ejercicio 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="ejercicio3.php">Ejercicio 3</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio4.php">Ejercicio 4</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio5.php">Ejercicio 5</a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ejercicios 6-10
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="ejercicio1.php">Ejercicio 6</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio2.php">Ejercicio 7</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio3.php">Ejercicio 8</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio4.php">Ejercicio 9</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio5.php">Ejercicio 10</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card mt-5">
                            
                            <div class="card-body">
                                <img src="recursos/pensando.jpg" class="card-img-top w-100 img-fluid" alt="pensando">
                                <h5 class="card-title text-center mt-3 text-info">Ejercicio 3</h5>
                                <p class="card-text">3.Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de zapatos que se compren.</p>
                                </p>
                                <ul class="card-text">
                                        <li>Si son 3 pares se les dará un 10% de descuento al cliente sobre el total de la compra;</li>
                                        <li> Si el número de zapatos es mayor 3 pares, pero menor o igual de 8 pares, se le otorga un 20% de descuento</li>
                                        <li>si son más 8 pares de zapatos se otorgará un 50% de descuento. Defina la cantidad de variables que necesite, el costo de cada par de zapatos y establezca el valor total de la compra de zapatos.</li>
                                </ul>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                            <div class="card mt-5">
                            
                                <div class="card-body text-center">
                                    <h4 class="text-center text-info">Tienda Spring Step</h4>
                                    <img src="recursos/zapatos.jpg" class="card-img-top w-100 img-fluid col-md-6" alt="zapatos">
                                    <form action="ejercicio3.php" method="POST">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 mt-2">
                                                <input type="number" class="form-control" placeholder="Ingresa cantidad de pares" name="zapatos" id="zapatos" required>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <input type="number" class="form-control" placeholder="Valor por par" name="valor" id="valor" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3 mb-4" name="calcular" id="calcular">Calcular Total</button>
                                    </form>
                                    <?php
                                        function calcularTotal(){
                                            $zapatos = $_POST["zapatos"];
                                            $valor = $_POST["valor"];
                                            $valorBruto = $zapatos * $valor ;

                                            if ($zapatos == 3) {
                                                $descuento =10;
                                                $valorTotal = $valorBruto-($valorBruto *0.1);
                                            }
                                            elseif($zapatos > 3 && $zapatos <= 8){
                                                $descuento = 20;
                                                $valorTotal = $valorBruto-($valorBruto *0.2);
                                            }
                                            
                                            elseif($zapatos > 8){
                                                $descuento = 50;
                                                $valorTotal = $valorBruto-($valorBruto *0.5); 
                                            }
                                            
                                            
                                            echo("<div class=\"card text-center col-md-12\">"
                                                    ."<p><img class=\"card-img-top w-100 img-fluid col-md-5\" src=\"recursos/zapatos.jpg\" alt=\"Zapatos\"></p>"
                                                    ."<div class=\"card-body\">"
                                                        ."<div class=\"alert alert-success\" role=\"alert\">Resultado Obtenido!</div>"
                                                        ."<p class=\"text-info card-text\">El Valor Total A pagar es $".$valorTotal."</p>"
                                                        ."<p class=\"text-info card-text\">La cantidad de pares de zapatos fue de ".$zapatos."</p>"
                                                        ."<p class=\"text-info card-text\">Cada par tiene un precio de $".$valor."</p>"
                                                        ."<p class=\"text-info card-text\">Su descuento fue de un ".$descuento."%</p>"
                                                    ."</div>"
                                                 ."</div>");
                                        }
                                        
                                        if(isset($_POST["calcular"])){
                                            calcularTotal();
                                        }
                                        
                                    ?>
                                   
                                </div>
                            
                            </div>
                            
                            
                    </div>
                </div>
            </div>
        
        </main>
        <footer class="bg-dark text-white mt-5">
          <div class="contaner">
            <div class="row justify-content-around text-center ">
              <div class="col-md-3 mt-5">
                <img src="recursos/creador1.jpeg" alt="creador Carlos Diaz" class="img-fluid w-100 rounded-circle">
                <p>Carlos Andres Diaz Aguirre ©</p>
                <p>andrez1915@gmail.com</p>
                <p>Medellin - Colombia</p>
                <p>2020</p>
              </div>
              <div class="col-md-3 mt-5">
              <img src="recursos/creador1.jpeg" alt="creador Carlos Diaz" class="img-fluid w-100 rounded-circle">
                <p>Esteban Barrientos ©</p>
                <p>EstebanBarrientos@gmail.com</p>
                <p>Medellin - Colombia</p>
                <p>2020</p>
              </div>
            </div>
            <div class="row justify-content-center text-center">
              <div class="col-md-8">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                  <a href="https://www.cesde.edu.co/Paginas/tecnicos/procesos-tecnologicos-e-industriales/desarrollo-de-software-virtual.aspx"> Grupo Cerrado Intersoftware - CESDE</a>
                </div>
              </div>
            </div>
          </div>
        
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>