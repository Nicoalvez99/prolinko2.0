const ctxm = document.getElementById('myChartMensual');

new Chart(ctxm, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Cantidad de ventas por mes',
            data: [589, 456, 736, 367, 287, 367, 976, 267, 367, 178, 876, 100],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});