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
          <div class="container">
            <div class="row justify-content-center mt-5">
              <div class="col-md-12">
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
                          <div class="card">
                            <div class="card-body">
                            <h5 class="text-info card-title">Usuario 1</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/stand.png" alt="stand">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreStand" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionStand" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoStand" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioStand" required>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-body">
                            <h5 class="text-info card-title">Usuario 2</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/butter.png" alt="butters">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreButter" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionButter" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoButter" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioButter" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-body">
                            <h5 class="text-info card-title">Usuario 3</h5>
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
                          <div class="card">
                            <div class="card-body">
                            <h5 class="text-info card-title">Usuario 4</h5>
                              <img class="card-img-top w-100 img-fluid" src="recursos/kyel.png" alt="kyel">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreKyel" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionKyel" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoKyel" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioKyel" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="text-info card-title">Usuario 5</h5>
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