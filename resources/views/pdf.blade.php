<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
</head>
<style>
    .header {
        display: block;
    }
    .main-container {
        margin: 90px auto;
        width: 600px;
    }

    table {
        background-color: white;
        text-align: left;
        width: 100%;
        border: 1px black solid;
    }

    th,
    td {
        padding: 15px;
        border: 1px solid black;
    }

    thead {
        background-color: rgba(24, 24, 147, 1);
        color: aliceblue;
    }
    .texto {
        font-size: 15px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        padding: 0px 20px;
        margin-top: 20px;
    }
    i {
        padding: 0px 10px;
        margin-top: 30px;
    }
    h1 {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin: 20px 0px;
        font-size: 20px;
        font-weight: 300;
    }
    h2, th, td {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
</style>

<body>
    <div class="header">
        <img src="{{ public_path('images/Prolinko1.PNG') }}" width="250" alt=""><br>

        <i>Parte de tus ventas, parte de tus sueños.</i>
        <h1>Hola {{ Auth::user()->name }}!</h1>
        <p class="texto">En Prolinko, entendemos que cada paso que das en tu negocio es importante. Tu éxito es nuestro éxito, y estamos encantados de ofrecerte este resumen especial de productos y tu historial de ventas. <br>
            <br>
            Este documento es un testimonio de tu dedicación y esfuerzo incansable para satisfacer las necesidades de tus clientes. Aquí encontrarás un vistazo detallado a los productos que has ofrecido, así como un registro completo de tus transacciones. <br>
            <br>
            En cada línea de este resumen, encontrarás el reflejo de tu compromiso con la calidad, la excelencia en el servicio y la satisfacción del cliente. Cada producto vendido es un logro, y cada venta es un paso hacia adelante en tu camino hacia el éxito. <br>
            <br>
            Recuerda que estamos aquí para apoyarte en cada paso del camino. Si necesitas asistencia adicional, no dudes en ponerte en contacto con nuestro equipo de soporte. Estamos comprometidos a ayudarte a alcanzar tus metas y a hacer crecer tu negocio. <br>
            <br>
            Gracias por elegir Prolinko. Tu éxito es nuestra razón de ser, y esperamos con entusiasmo seguir siendo tu socio de confianza en el mundo de los negocios. <br>
            <br>
            ¡Sigue adelante y triunfa! <br>
            <br>
            Con gratitud, <br>
            
            Equipo de Prolinko.</p><br>
    </div>
    <div class="main-container">
        <h2>Tus productos</h2>
        <table>
            <thead>
                <th>Código</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Rubro</th>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>${{ $producto->precio }}</td>
                    <td>{{ $producto->rubro }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="main-container">
        <h2>Tu Historial de ventas</h2>
        <table>
            <thead>
                <th>Fecha y hora</th>
                <th>Productos</th>
                <th>Rubros</th>
                <th>Total</th>
            </thead>
            <tbody>
                @foreach($historials as $historial)
                <tr>
                    <td>{{ $historial->created_at }}</td>
                    <td>{{ $historial->aProductos }}</td>
                    <td>{{ $historial->aRubros }}</td>
                    <td>${{ $historial->total }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <div>
            <p>ventas del mes enero: <span>{{ $ventasPorMeses['January'] ?? 0 }}</span></p>
            <p>ventas del mes febrero: <span>{{ $ventasPorMeses['February'] ?? 0 }}</span></p>
            <p>ventas del mes marzo: <span>{{ $ventasPorMeses['March'] ?? 0 }}</span></p>
            <p>ventas del mes abril: <span>{{ $ventasPorMeses['April'] ?? 0 }}</span></p>
            <p>ventas del mes mayo: <span>{{ $ventasPorMeses['May'] ?? 0 }}</span></p>
            <p>ventas del mes junio: <spa>{{ $ventasPorMeses['June'] ?? 0 }}</span></p>
            <p>ventas del mes julio: <span>{{ $ventasPorMeses['July'] ?? 0 }}</span></p>
            <p>ventas del mes agosto: <span>{{ $ventasPorMeses['August'] ?? 0 }}</span></p>
            <p>ventas del mes septiembre: <span>{{ $ventasPorMeses['September'] ?? 0 }}</span></p>
            <p>ventas del mes octubre: <span>{{ $ventasPorMeses['October'] ?? 0 }}</span></p>
            <p>ventas del mes noviembre: <span>{{ $ventasPorMeses['November'] ?? 0 }}</span></p>
            <p>ventas del mes diciembre: <span>{{ $ventasPorMeses['Dicember'] ?? 0 }}</span></p>
        </div>
    </div>

</body>

</html>