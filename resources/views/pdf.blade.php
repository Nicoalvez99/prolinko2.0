<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .main-container {
        margin: 150px auto;
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
        padding: 20px;
    }

    thead {
        background-color: #246355;
        color: aliceblue;
    }

    
</style>

<body>
    <div class="header">
        <h1 class="degradado-texto-h1">Prolinko</h1>
    </div>
    <div class="main-container">
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
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->rubro }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>