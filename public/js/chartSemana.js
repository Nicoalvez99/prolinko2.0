const ctx = document.getElementById('myChart');

let lunes = parseInt(document.getElementById('lunes').textContent);
let martes = parseInt(document.getElementById('martes').textContent);
let miercoles = parseInt(document.getElementById('miercoles').textContent);
let jueves = parseInt(document.getElementById('jueves').textContent);
let viernes = parseInt(document.getElementById('viernes').textContent);
let sabado = parseInt(document.getElementById('sabado').textContent);
let domingo = parseInt(document.getElementById('domingo').textContent);


new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        datasets: [{
            label: 'Cantidad de ventas por día',
            
            data: [domingo, lunes, martes, miercoles, jueves, viernes, sabado],
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