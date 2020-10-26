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
                <div class="col-10">
                    <h1>Ejercicio 2</h1>
                    <p>2.El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus
                        usuarios calcular el índice de masa corporal basado en el formula: 𝐼𝑀𝐶 = 𝑃𝐸𝑆𝑂/
                        𝐴𝐿𝑇𝑈𝑅𝐴 ∗ 𝐴𝐿𝑇𝑈𝑅𝐴
                        Tenga en cuenta que la clasificación del IMC es la siguiente:</p>




                </div>
            </div>
            <form action="ejercicio2.php" method="POST">
                <div class="row justify-content-center mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ingresa el Peso" name="peso">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Altura" name="altura">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4" name="calcular">Calcular</button>
            </form>


            <?php
            if(isset($_POST["calcular"])){
              $peso = $_POST["peso"];
              $altura = $_POST["altura"];
              $imc = $peso / ($altura * $altura);

              if ($imc < 18.5) {
                echo("El peso es insuficiente para calcular el IMC");
                
              }
              elseif($imc >= 18.5 && $imc <= 24.9){
                echo("La Clasificación es Normopeso");

              }
              elseif($imc >= 25 && $imc <= 26.9){
                echo("Tienes un sobrepeso grado 1");
                
              }
              elseif($imc >= 27 && $imc <= 29.9){
                echo("Tienes un Sobre preso grado II o Preobesidad");
              }
              elseif ($imc >=30 && $imc <= 34.9) {
                echo("Tienes una obesidad de tipo I");
              }
              elseif ($imc >=35 && $imc <= 39.9) {
                echo("Tienes una obesidad de tipo II");
              }
              elseif ($imc >=40 && $imc <= 49.9) {
                echo("Tienes una obesidad de tipo III o Mórbida");
              }else{
                echo("Tienes una Obesidad extrema o de Tipo IV");
              }



            }




            ?>




        </main>
    </div>
    <footer class="page-footer font-small teal pt-4">


        <div class="container-fluid text-center text-md-left">


            <div class="row">


                <div class="col-md-6 mt-md-0 mt-3">


                    <h5 class="text-uppercase font-weight-bold">Carlos Andrés Díaz Aguirre</h5>


                </div>


                <hr class="clearfix w-100 d-md-none pb-3">


                <div class="col-md-6 mb-md-0 mb-3">


                    <h5 class="text-uppercase font-weight-bold">Esteban Barrientos Aguirre</h5>


                </div>


            </div>

        </div>

        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a
                href="https://www.cesde.edu.co/Paginas/tecnicos/procesos-tecnologicos-e-industriales/desarrollo-de-software-virtual.aspx">
                Grupo Cerrado Intersoftware - CESDE</a>
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