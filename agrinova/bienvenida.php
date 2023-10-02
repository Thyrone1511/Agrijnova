<?php
session_start();

if(!isset($_SESSION['correo'])){
    echo '
        <script>
            alert ("Debes iniciar sesion");
      </script>
    ';
    header("location: index.php");
    session_destroy();
    die();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="stylesheet" href="assets/css/estilo.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
</head>
<body id="body">
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
              <a href="php/cerrar_sesion.php">Cerrar sesion</a>
        </div>
    </header>
    <div class="menu__side" id="menu_side">
         <div class="name__page">
             <i class="far fa-address-card"></i> 
            <h4>Agrinova</h4> 
         </div>
        <div class="options__menu">
            <a href="#" class="selected">
                <div class="option">
                <i class="fas fa-home" title="Inicio"></i>
                <h4>Inicio</h4>
                </div>
            </a>
        <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Simulador"></i>
                    <h4>Simulador</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Cultivador"></i>
                    <h4>Cultivador</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Agrobot"></i>
                    <h4>Agrobot</h4>
                </div>
            </a>
    </div>
</div>

<main>
        <h1>Bienvenido</h1><br>
        <h2>Esta es la pagina principal de agrinova, aqui podras realizar activades como por ejemplo: </h2> <br>
        <h3>Simulador de pagos</h3><br>
        <h3>Un aconsejador de cultivos</h3><br>
        <h3>Un chat bot llamado "Agrobot" donde puedas hacer tus preguntas con respecto a los derechos laborales</h3><br>
    </main>
  <script src="assets/js/script2.js"></script>
</body>
</html>