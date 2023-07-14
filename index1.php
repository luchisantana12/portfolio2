<?php
    $pg = "inicio"; 
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/s.jpg">
</head>
<body id="inicio" class="container d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu1.php");?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center cohete">
                <a href="proyectos.php">
                    <img src="images/cohete.svg" alt="cohete">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 text-center offset-sm-3">
                <p class="py-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyectos.php" class="btn btn-blanco shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pt-5">
        <div class="btn-whatsapp fixed">
            <a href="https://wa.link/uy9ra1"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="" target="_blank" title="github"><i class="fa-brands fa-github"></i></i></a>
                <a href="" target="_blank" title="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://DePcsuite.com"> DePcsuite </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailito:luchisantana555@gmail.com">luchisantana555@gmail.com</a>
            </div>
        </div>
    </footer>
</body>
</html>