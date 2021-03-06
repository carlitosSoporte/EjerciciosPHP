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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ejercicios 1-5
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="ejercicio1.php">Ejercicio 1</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio2.php">Ejercicio 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio3.php">Ejercicio 3</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ejercicio4.php">Ejercicio 4</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="ejercicio5.php">Ejercicio 5</a>
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
            <div class="row justify-content-center mt-5">
              <div class="col-md-12 mt-5">
                <div class="card">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="card-img-top w-100 img-fluid" src="recursos/pensando.jpg" alt="Pensando">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h4 class="text-info">Ejercicio 5</h4>
                        <p class="card-text">5.Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita:</p>
                        <ul>
                          <li>Almacenar en variables información de nombre, teléfono, dirección y salario de 5 usuarios de una sucursal llamada sucursal A.</li>
                          <li>Sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000. </li>
                        </ul>
                        <p class="card-text">Permita que su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal A</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-12">
                <h4 class="text-success">SOLUCION PROPUESTA</h4>
                <h2 class="card-title text-info text-center">Sucursal A</h2>
                <div class="card">
            
                <div class="card-body text-center">
                    
                    <img class="card-img-top w-100 img-fluid col-md-6" src="recursos/bancolombia.jpg" alt="Bancolombia">
                    <form action="ejercicio5.php" method="POST">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 1</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/stand.png" alt="stand">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreStand" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionStand" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoStand" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioStand" required>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 2</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/butter.png" alt="butters">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreButter" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionButter" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoButter" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioButter" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 3</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/erick.png" alt="erick">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreErick" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionErick" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoErick" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioErick" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-around mt-4">
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 4</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/kyel.png" alt="kyel">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreKyel" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionKyel" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoKyel" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioKyel" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                              <h5 class="text-white card-title">Usuario 5</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/kenny.png" alt="kenny">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreKenny" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionKenny" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoKenny" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioKenny" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary col-md-10 mt-4" name="btnEnviarDatos">Enviar datos</button>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3 justify-content-center">
              <div class="col-md-12">
                <div class="card bg-secondary">
                  <div class="card-body">
                    <div class="row">
                      <?php if(isset($_POST["btnEnviarDatos"])): ?>
                        <?php 
                          $nombres = array($_POST["nombreStand"],$_POST["nombreButter"],$_POST["nombreErick"],$_POST["nombreKyel"],$_POST["nombreKenny"]);
                          $direcciones = array($_POST["direccionStand"],$_POST["direccionButter"],$_POST["direccionErick"],$_POST["direccionKyel"],$_POST["direccionKenny"]);
                          $telefonos = array($_POST["telefonoStand"],$_POST["telefonoButter"],$_POST["telefonoErick"],$_POST["telefonoKyel"],$_POST["telefonoKenny"]);
                          $salarios = array($_POST["salarioStand"],$_POST["salarioButter"],$_POST["salarioErick"],$_POST["salarioKyel"],$_POST["salarioKenny"]);
                          $sumatoriaSucursalB = 40000000;
                          $sumatoriaSucursalC = 32000000;
                          $sumatoriaSalarios =0;
                          $rutaSucursalA = "recursos/southPark.jpg";
                          $rutaSucursalB = "recursos/simpson.jpg";
                          $rutaSucursalC = "recursos/happy.jpg";
                          $rutaStand ="recursos/stand.png";
                          $rutaButter = "recursos/butter.png";
                          $rutaErick = "recursos/erick.png";
                          $rutaKyel = "recursos/kyel.png";
                          $rutaKenny = "recursos/kenny.png";
                          $imagenes = array($rutaStand,$rutaButter,$rutaErick,$rutaKyel,$rutaKenny);

                          for($i=0;$i<sizeof($salarios);$i++){
                              $sumatoriaSalarios += $salarios[$i];
                          }

                        ?>
                        <div class="col-md-8">
                          <?php 
                            

                          if($sumatoriaSalarios > $sumatoriaSucursalB & $sumatoriaSalarios > $sumatoriaSucursalC){

                            $fotoPrimerLugar= $rutaSucursalA;
                            $salarioPrimerLugar = $sumatoriaSalarios;
                            $sucursalGanadora = "SCURSAL A";

                            if($sumatoriaSucursalB > $sumatoriaSucursalC){
                              $fotoSegundoLugar = $rutaSucursalB;
                              $salarioSegundoLugar = $sumatoriaSucursalB;
                              $sucursalSegundoLugar = "SUCURSAL B";
                              $fotoTercerLugar = $rutaSucursalC;
                              $salarioTercerLugar = $sumatoriaSucursalC;
                              $sucursalTercerLugar = "SUCURSAL C";
                            }
                            else{
                              $fotoSegundoLugar = $rutaSucursalC;
                              $salarioSegundoLugar = $sumatoriaSucursalC;
                              $fotoTercerLugar = $rutaSucursalB;
                              $salarioTercerLugar = $sumatoriaSucursalB;
                            }
                          }
                          else if($sumatoriaSucursalB > $sumatoriaSalarios & $sumatoriaSucursalB > $sumatoriaSucursalC){
                            $fotoPrimerLugar= $rutaSucursalB;
                            $salarioPrimerLugar = $sumatoriaSucursalB;
                            $sucursalGanadora = "SUCURSAL B";

                            if($sumatoriaSalarios > $sumatoriaSucursalC){
                              $fotoSegundoLugar = $rutaSucursalA;
                              $salarioSegundoLugar = $sumatoriaSalarios;
                              $sucursalSegundoLugar = "SUCURSAL A";
                              $fotoTercerLugar = $rutaSucursalC;
                              $salarioTercerLugar = $sumatoriaSucursalC;
                              $sucursalTercerLugar = "SUCURSAL C";
                            }
                            else{
                              $fotoSegundoLugar = $rutaSucursalC;
                              $salarioSegundoLugar = $sumatoriaSucursalC;
                              $sucursalSegundoLugar = "SUCURSAL C";
                              $fotoTercerLugar = $rutaSucursalA;
                              $salarioTercerLugar = $sumatoriaSalarios;
                              $sucursalTercerLugar = "SUCURSAL A";
                            }
                          }
                          else{
                            $fotoPrimerLugar= $rutaSucursalC;
                            $salarioPrimerLugar = $sumatoriaSucursalC;
                            $sucursalGanadora = "SCURSAL C";

                            if($sumatoriaSucursalB > $sumatoriaSucursalC){
                              $fotoSegundoLugar = $rutaSucursalB;
                              $salarioSegundoLugar = $sumatoriaSucursalB;
                              $sucursalSegundoLugar = "SUCURSAL B";
                              $fotoTercerLugar = $rutaSucursalA;
                              $salarioTercerLugar = $sumatoriaSalarios;
                              $sucursalTercerLugar = "SUCURSAL A";
                            }
                            else{
                              $fotoSegundoLugar = $rutaSucursalA;
                              $salarioSegundoLugar = $sumatoriaSalarios;
                              $sucursalSegundoLugar = "SUCURSAL A";
                              $fotoTercerLugar = $rutaSucursalB;
                              $salarioTercerLugar = $sumatoriaSucursalB;
                              $sucursalTercerLugar = "SUCURSAL B";

                            }
                          }
                          
                          ?>
                          <?php if(true): ?>
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src=<?=$fotoPrimerLugar?> alt="Sucursal con mejor Salario" class="w-100 img-fluid">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="alert alert-success" role="alert">
                                      <h5 class="text-succes"><?= $sucursalGanadora?> Ganadora!</h5>
                                      <P class="tex-info">La sumatoria de salarios es de <?=$salarioPrimerLugar?></P>
                                    </div>
                                  </div>
                                </div>
                                <p></p>
                              </div>
                            </div>
                            <div class="card mt-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src=<?=$fotoSegundoLugar?> alt="Sucursal con segundo mejor Salario" class="w-100 img-fluid">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="alert alert-danger" role="alert">
                                      <h5 class="text-succes"><?= $sucursalSegundoLugar?> Segundo Lugar!</h5>
                                      <P class="tex-info">La sumatoria de salarios es de <?=$salarioSegundoLugar?></P>
                                    </div>
                                  </div>
                                </div>
                                <p></p>
                              </div>
                            </div>
                            <div class="card mt-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src=<?=$fotoTercerLugar?> alt="Sucursal con peor Salario" class="w-100 img-fluid">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="alert alert-danger" role="alert">
                                      <h5 class="text-succes"><?= $sucursalTercerLugar?> Tercer lugar!</h5>
                                      <P class="tex-info">La sumatoria de salarios es de <?=$salarioTercerLugar?></P>
                                    </div>
                                  </div>
                                </div>
                                <p></p>
                              </div>
                            </div>
                          <?php endif ?>
                        </div>
                        <div class="col-md-4">
                          <?php for($i=0; $i < sizeof($nombres); $i++): ?>
                            <div class="card mt-3">
                              <div class="card-body">
                                <img src=<?=$imagenes[$i]?> alt=<?=$nombres[$i]?> class="w-100 img-fluid">
                                <div class="alert alert-info mt-3" role="alert">
                                  <h5 class="text-center text-info"><strong>Usuario <?=$i+1 ?></strong></h5>
                                  <p class="mt-2">Nombre:  <strong><?=$nombres[$i] ?></strong></p>
                                  <p class="mt-2">Dirrecion:  <strong><?=$direcciones[$i] ?></strong></p>
                                  <p class="mt-2">Telefono:  <strong><?=$telefonos[$i] ?></strong></p>
                                  <p class="mt-2">Salario: $<strong><?=$salarios[$i] ?></strong></p>
                                </div>
                                
                              </div>
                            </div>
                          <?php endfor ?>
                          
                        </div>
                        
                      <?php endif ?>
                      <?php ?>

                    </div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>