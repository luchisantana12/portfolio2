<?php
    $pg = "sobre-mi"; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/s.jpg">
</head>
<body id="sobre-mi">
    <header class="container">
    <?php include_once("menu1.php");?>
    </header>
    <main>
    <section class="container" id="descripcion">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Sobre mi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-9">
                <p>apasionado por el trabajo, el desarrollo y la inovacion. Desarrolador full stack</p>
                <a href="contacto1.php" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
            </div>
            <div class="col-12 col-sm-3">
                <img src="images/6016EE19-1339-4927-82EB-F3B5BAFCD25A_edited.jpg" alt="luciano santana" class="foto-perfil img-fluid d-none d-sm-block">
            </div>
        </div>
    </section>
    <section id="stack-t">
        <div class="container">
            <div class="row">
                <div class="col-12 py-4">
                    <h2>
                        Stack tecnologico
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2 mb-2">
                    <div class="tecnologias py-5 mb-4">
                    <h3 class="text-center">                   
                        Javascript
                    </h3>
                    <img src="images/logo_javascript_icon_234960.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-2">
                    <div class="tecnologias py-5 mb-4">
                    <h3 class="text-center">
                        PHP
                    </h3>
                    <img src="images/php_icon_196108.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-2">
                    <div class="tecnologias py-5 mb-4">
                    <h3 class="text-center">
                        HTML5
                    </h3>
                    <img src="images/2333390-html-html5-internet-website_85590.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-2">
                    <div class="tecnologias py-5 mb-4">
                    <h3 class="text-center">
                        react.js
                    </h3>
                    <img src="images/react_logo_icon_144942.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-2">
                    <div class="tecnologias py-5 mb-4">
                    <h3 class="text-center">
                        jQuery
                    </h3>
                    <img src="images/2333384-code-jquery-social_85595.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="tecnologias py-5 mb-4">
                    <h3 class="text-center">
                        bootstrap
                    </h3>
                    <img src="images/bootstrap_icon_195906.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2> <i class="fa-solid fa-briefcase"></i> Experiencia laboral </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="images/sin-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-10">
                        <h3 class="pt-2"> Dueño de comercio</h3>
                        <h4>2019 - Actualidad</h4>
                        <p>Soy dueño de un comercio en Parana, Entre rios. Dedicado a venta de pescados de rio tanto como de mar y variados</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="form-academica">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-3">
                        <h2><i class="fa-solid fa-graduation-cap"></i>formacion academica</h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 p-5 d-none d-sm-block">
                        <img src="images/sin-logo.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-10">
                        <h3 class="pt-2">Primario y Secundario</h3>
                        <h4>Colegio N°128 "El Madero". Parana, Entre Rios</h4>
                        <h5>2007 - 2020</h5>
                    </div>
                    <div class="col-2 d-none d-sm-block">
                        <img src="images/logoo_Siglo21.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-10">
                        <h3>Licenciatura en Marketing</h3>
                        <h4>Universidad Siglo 21</h4>
                        <h5>2021 - 2023</h5>
                        <h5>materias aprobadas 15 de 35</h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container mt-auto pt-4">
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