<?php
    $pg = "proyectos"; 
?>


<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/s.jpg">
</head>
<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu1.php");?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-3">
                <p>Los siguientes son algunos proyectos que he realizado</p>
            </div>
        </div>
        <div class="row"> <!--no cerrar este div-->
            <div class="col-sm-4 col-12 p-4">
                <div class="row border  proyect">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="abmclientes" class="img-fluid">
                        <h2 class="px-3 py-2">ABM clientes </h2>
                        <p class="py-2 px-3">"Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS,
                        PHP, Bootstrap y Json."</p>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-r">ver online</a>
                        </div>
                        <div class="col-6 text-center"> 
                            <a href="#" class="link-rojo">codigo fuente</a>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-4">
                <div class="row border  proyect">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="abmventas" class="img-fluid">
                        <h2 class="px-3 py-2">ABM ventas</h2>
                        <p class="py-2 px-3">"Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos."</p>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-r">ver online</a>
                        </div>
                        <div class="col-6 text-center"> 
                            <a href="#" class="link-rojo">codigo fuente</a>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-4">
                <div class="row border proyect">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="proyecto-int" class="img-fluid">
                        <h2 class="px-3 py-2">proyecto integrador </h2>
                        <p class="py-2 px-3">"Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines."</p>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6 text-center">
                            <a href="#" class="btn btn-r">ver online</a>
                        </div>
                        <div class="col-6 text-center"> 
                            <a href="#" class="link-rojo">codigo fuente</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div><!--aca cierra el div-->
    </main>
        <footer class="container mt-auto">
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