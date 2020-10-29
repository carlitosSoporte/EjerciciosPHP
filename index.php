<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title> EJERCICIOS PHP</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="recursos/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo"
                    loading="lazy">
            </a>
            <a class="navbar-brand" href="index.php" id="textoPrincipal">Ejercicios PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="dropdown-item" href="ejercicio5.php">Ejercicio 5</a>
                        </div>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <h1 class="p-3 mb-4 mt-4">Taller Primer momento Evaluativo Web 1</h1>
            <div class="card-group">
                <div class="card">
                    
                    <a href="ejercicio1.php"><img src="recursos/calculadora.jpg" class="card-img-top" alt="calculadora"></a>
                    <div class="card-body">
                        <h5 class="card-title">1. Calculadora</h5>
                        <p class="card-text">Intenta resolver las operaciones básicas con nuestra calculadora</p>
                        
                    </div>
                </div>
                <div class="card">
                    <a href="ejercicio2.php"><img src="recursos/imc.jpg" class="card-img-top" alt="IMC"></a>
                    <div class="card-body">
                        <h5 class="card-title">2. Conoce tu IMC </h5>
                        <p class="card-text">¿Quieres saber si estás pasado o pasada de peso?</p>
                        
                    </div>
                </div>
                <div class="card">
                    <a href="ejercicio3.php"><img src="recursos/zapatos.jpg" class="card-img-top" alt="zapato"></a>
                    <div class="card-body">
                        <h5 class="card-title">3. Compra Zapatos</h5>
                        <p class="card-text">Calcula cuanto descuento conseguirás en nuestra tienda de Zapatos</p>
                        
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <a href="ejercicio4.php"><img src="recursos/salario.jpeg" class="card-img-top" alt="salario"></a>
                    <div class="card-body">
                        <h5 class="card-title">4. Calcula Salario</h5>
                        <p class="card-text">¿Trabajaste extra y no sabes cuanto vas a cobrar? ingresa aquí</p>
                        
                    </div>
                </div>
                
                <div class="card">
                    <a href="ejercicio5.php"><img src="recursos/kenny.png" class="card-img-top" alt="kenny"></a>
                    <div class="card-body">
                        <h5 class="card-title">Compara sueldos</h5>
                        <p class="card-text">Haz el cálculo de cual sucursal tiene los mejores salarios</p>
                        
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>