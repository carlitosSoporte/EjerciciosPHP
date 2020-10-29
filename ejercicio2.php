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
                            Ejercicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ejercicio1.php">Ejercicio 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="ejercicio2.php">Ejercicio 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="ejercicio3.php">Ejercicio 3</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="ejercicio4.php">Ejercicio 4</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="ejercicio5.php">Ejercicio 5</a>
                            <div class="dropdown-divider"></div>
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
    <div class="container">
        <main>
            <div class="row">
                <div class="col-8 mt-4">
                    <h1 class="p-3 mb-2 bg-white text-dark">Ejercicio 2</h1>
                    <p>2.El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus
                        usuarios calcular el índice de masa corporal basado en el formula: </p>
                  
                </div>
                <div class="col-4">
                <img src="recursos/imc.jpg" class="card-img-top  img-fluid" alt="Indice Masa Corporal">
                </div>
            </div>
            <form action="ejercicio2.php" method="POST">
                <div class="row justify-content-center mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ingresa el Peso" name="peso">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Altura en metros" name="altura">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 mb-4" name="calcular">Calcular</button>
            </form>


            <?php
            if(isset($_POST["calcular"])): ?>
            <?php
              $peso = $_POST["peso"];
              $altura = $_POST["altura"];
              $imc = $peso / ($altura * $altura);
              $normopeso = "https://hombresconestilo.com/wp-content/uploads/2018/08/Objetivos-de-peso.jpg.webp";
              $grado1 = "https://www.ecestaticos.com/image/clipping/557/418/72d1750492107e47af4a388e42c8ce50/por-que-los-hombres-suelen-ganar-kilos-de-forma-rapida.jpg";
              $grado2 = "https://observateperu.ins.gob.pe/images/contenido/noticias/2017/05/obesidad_infantil_4_veces_riesgo_diabetes_tipo_2.png";
              $obeso1 = "https://www.sanitaspromosalud.es/wp-content/uploads/2018/10/Obesidad-tipo-1-tratamiento-recomendado-2.png";
              $obeso2 = "http://oment.salud.gob.mx/wp-content/uploads/2016/03/obesidad_abdominal.jpg";
              $obeso3 ="https://alianzasalud.org.mx/wp-content/uploads/2013/07/ObesidadMorbida1.jpg";
              $extrema ="https://i.smalljoys.me/2018/01/cover-120.jpg?resize=1200,630";
            ?>

            <?php if ($imc < 18.5) : ?>
            <h2 class="alert alert-primary" role="alert"><?php echo("El peso es insuficiente para calcular el IMC"); ?>
            </h2>



            <?php elseif($imc >= 18.5 && $imc <= 24.9): ?>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?php echo("La Clasificación es Normopeso");?></h2>

                </div>
                <img src="<?php echo($normopeso)?>" class="card-img-bottom" alt="Normopeso">
            </div>


            <?php elseif($imc >= 25 && $imc <= 26.9): ?>
            
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?php echo("Tienes un sobrepeso grado 1");?></h2>
                    
                </div>
                <img src="<?php echo($grado1)?>" class="card-img-bottom" alt="sobrepeso 1">
            </div>


            <?php elseif($imc >= 27 && $imc <= 29.9): ?>
            
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo("Tienes un Sobrepreso grado II o Preobesidad");?></h2>
                    </div>
                    <img src="<?php echo($grado2)?>" alt="sobrepeso 2" class="card-img-bottom">
                </div>

                <?php elseif ($imc >=30 && $imc <= 34.9): ?>
                
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo("Tienes una obesidad de tipo I");?></h2>
                    </div>
                    <img src="<?php echo($obeso1)?>" class="card-img-bottom" alt="Obesidad 1">
                </div>

                <?php elseif ($imc >=35 && $imc <= 39.9) : ?>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo("Tienes una obesidad de tipo II");?></h5>
                    </div>
                    <img src="<?php echo($obeso2)?>" alt="Obesidad 2" class="card-img-bottom">
                </div>

                <?php elseif ($imc >=40 && $imc <= 49.9) : ?>
                
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo("Tienes una obesidad de tipo III o Mórbida");?></h2>
                    </div>
                    <img src="<?php echo($obeso3)?>" alt="Obesidad 3" class="card-img-bottom">
                </div>

                <?php else: ?>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ("Tienes una Obesidad extrema o de Tipo IV");?></h5>
                    </div>
                    <img src="<?php echo($extrema)?>" class="card-img-bottom"alt="Obesidad Extrema">
                </div>
                <?php endif ?>








                <?php endif?>




        </main>
    </div>
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