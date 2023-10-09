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
    <link rel="stylesheet" href="assets/css/estilo_inicio.css">
    <title>Página de Inicio</title>
    <script src="assets/js/script2.js"></script>
</head>
<body>
    <header>
        <h1>Agrinova</h1>
    </header>

    <main>
        <div class="opcion">
            <img src="simulador.jpg" alt="Simulador de Pagos">
            <h2>Simulador de Pagos</h2>
            <form method="post" action="simulador.php">
    <button type="submit" class="boton-entrar">Entrar al Simulador</button>
</form>

        </div>
        <div class="opcion">
            <img src="aconsejador.jpg" alt="Aconsejador">
            <h2>Aconsejador</h2>
            <button onclick="redirigirAAconsejador()">Entrar</button>
        </div>

        <div class="opcion">
            <img src="agrobot.jpg" alt="Agrobot">
            <h2>Agrobot</h2>
            <button onclick="redirigirAAgrobot()">Entrar</button>
        </div>

        <div class="opcion">
        <img src="cerrar.jpg" alt="Cerrar">
            <h2>Cerrar sesion</h2>
            <form method="post" action="php/cerrar_sesion.php">
                <button type="submit">Salir</button>
            </form>  
        </div>
    </main>
</body>
</html>
