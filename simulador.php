<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo_simu.css">
    <title>Simulador de Pagos</title>
</head>
<body>
    <h1>Simulador de Pagos</h1>
    <form id="simulator-form">
        <label for="remuneracion">Remuneración Mensual:</label>
        <input type="number" id="remuneracion" required><br>

        <label for="tiempoServicio">Tiempo de Servicio (en meses):</label>
        <input type="number" id="tiempoServicio" required><br>

        <label for="bonos">Bonos:</label>
        <input type="number" id="bonos" required><br>

        <button type="button" onclick="calcularTotal()">Calcular Total</button><br>

        <h2>Resultado:</h2>
        <p id="resultado"></p>
        <form method="post" action="../bienvenida.php">
    <button type="submit" class="boton-entrar">Borrar los campos</button>
    <br></br>

    <a href="bienvenida.php" style="background-color: #3498db; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Regresar a la página de inicio</a>


    </form>
    <script src="assets/js/script3.js"></script>
</form>
</html>
