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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ejercicios 1-5
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="ejercicio1.php">Ejercicio 1</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio2.php">Ejercicio 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio3.php">Ejercicio 3</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="ejercicio4.php">Ejercicio 4</a>
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
                                <a class="dropdown-item" href="ejercicio6.php">Ejercicio 6</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio7.php">Ejercicio 7</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio8.php">Ejercicio 8</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio9.php">Ejercicio 9</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio10.php">Ejercicio 10</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
        <div class="container">
            <div class="row mt-5 justify-content-center">
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top w-100 img-fluid" src="recursos/dudas2.jpg" alt="pensando">
                  <div class="card-body">
                    <h5 class="card-text text-info text-center">Ejercicio 4</h5>
                    <p class="card-text">4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.</p>
                  </div>
                </div>     
              </div>
              <div class="col-md-8">
                  <div class="card text-center">
                      <div class="card-body">
                        <h4 class="text-info">Salario a recibir</h4>
                        <img class="card-img-top w-100 img-fluid col-md-6" src="recursos/salario.jpeg" alt="salario">
                        <form action="ejercicio4.php" method="POST">
                          <div class="row justify-content-center">
                            <div class="col-md-8 mt-4">
                              <input type="number" class="form-control" placeholder="Ingresa las horas trabajadas" name="cantidadHoras">
                            </div>
                            
                            
                          </div>
                          <div class="row justify-content-center mt-2">
                            <div class="col-md-10">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100" name="btnCalcular">Calcular Salario</button>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-center">
                            <div class="col-md-8">
                              <?php 
                                calcularSalario();

                                function calcularSalario(){
                                  if(isset($_POST["btnCalcular"])){
                                    $horas = $_POST["cantidadHoras"];
                                    
                                    
                                    if(!empty($horas)){
                                      if($horas <=40){
                                        $resultado = $horas *20000;
                                        echo ("<div class=\"card text-center col-md-12\">"
                                        ."<div class=\"card-body mt-3\">"
                                          ."<div class=\"alert-success\" role=\"alert\">Resultado Obtenido!"
                                          ."<p class=\"text-info\"> el valor total a recibir es de: $ ".$resultado."</p>"
                                        ."</div>"
                                      ."</div>");
                                      }
                                      elseif($horas > 40){
                                        $resultado = ($horas -40)*25000+(40*20000);
                                        $extras = $horas - 40;

                                        echo("<div class=\"card text-center col-md-12\">"
                                              ."<div class=\"card-body mt-3\">"
                                                ."<div class=\"alert-success\" role=\"alert\">Resultado Obtenido!"
                                                ."<p class=\"text-info\">Las horas extras trabajadas son  ".$extras." y el valor total a recibir es de: $ ".$resultado."</p>"
                                              ."</div>"
                                            ."</div>");
                                      }

  
                                      
  
                                      
  
                                    }
                                    else{
                                      echo "<div class=\"alert alert-danger\" role=\"alert\">"
                                              ."Debes ingresar la cantidad de horas trabajadas"
                                            ."</div>";
                                    }
                                  }
                                }
                              ?>
                            </div>
                          </div>
                          
                        </form>  
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
                    <img src="recursos/esteban2.png" alt="creador Esteban Barrientos" class="img-fluid w-100 rounded-circle">
                    <p>Esteban Barrientos ©</p>
                    <p>EstebanBarrientos@gmail.com</p>
                    <p>Medellin - Colombia</p>
                    <p>2020</p>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a
                            href="https://www.cesde.edu.co/Paginas/tecnicos/procesos-tecnologicos-e-industriales/desarrollo-de-software-virtual.aspx">
                            Grupo Cerrado Intersoftware - CESDE</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
        
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>