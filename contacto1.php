<?php
    $pg = "contacto"; 

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorre"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    $para = "luchisantana555@gmail.com";
    $titulo = "recibiste un mensaje desde tu web";

    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje <br>
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: luchisantana555@gmail.com' . "\r\n";



// Enviarlo
//mail($para, $título, $mensaje, $cabeceras);
header("location: contacto2.php");
}


?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/s.jpg">
</head>
<body id="contacto" class="container d-flex flex-column h-100">
<header class="container">
<?php include_once("menu1.php");?>
</header>
<main class="container">
    <div class="row">
        <div class="col-12 pt-3 pb-5">
            <h1>Contacto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <p>Te invito a que nos contactes enviandonos un mensaje</p>
        </div>
        <div class="col-12 col-sm-6">
            <form action="" method="POST">
                <div class="pb-3">
                <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                </div>    
                <div class="pb-3">
                <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                </div>
                <div class="pb-3">
                <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="telefono/whatsapp"  class="form-control shadow">
                </div>   
                <div class="pb-3">
                <textarea name="txtMensaje" id="txtMensaje"  class="form-control shadow" placeholder="escriba aqui su mensaje"></textarea>
                </div>
                <div class="pb-3">
                <button type="submit" name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
                </div>
            </form>
            
        </div>
    </div>
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