// Calcular el total de la renta en base a días y precio
function calcularTotal(id, precioPorDia) {
    const dias = document.getElementById('dias' + id).value;
    const total = dias * precioPorDia;
    document.getElementById('total' + id).textContent = 'Total: $' + total;
}

// Mostrar mensaje al procesar una reserva
function procesarReserva(event) {
    event.preventDefault(); // Evita que se recargue la página
    const estado = document.getElementById("estadoReserva");
    estado.textContent = "Procesando pago...";
    setTimeout(() => {
        estado.textContent = "✅ ¡Tu reserva está hecha!";
    }, 3000);
}


