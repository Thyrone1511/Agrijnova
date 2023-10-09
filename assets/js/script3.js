function calcularTotal() {
    const remuneracionMensual = parseFloat(document.getElementById("remuneracion").value);
    const tiempoServicio = parseFloat(document.getElementById("tiempoServicio").value);
    const bonos = parseFloat(document.getElementById("bonos").value);

    let total = (remuneracionMensual / 12) * tiempoServicio + bonos;

    if (tiempoServicio > 12) {
        total += remuneracionMensual; // Suma un mes de remuneración extra por las vacaciones pagadas
    }

    document.getElementById("resultado").textContent = `Total a pagar: ${total.toFixed(2)} soles`;
}
function regresarAInicio() {
    window.location.href = "bienvenida.php"; 
}