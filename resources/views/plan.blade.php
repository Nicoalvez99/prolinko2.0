<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/Logo.PNG') }}" type="image/x-icon">

    <title>Prolinko</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section class="p-5">
            <div class="row pb-3">
                <div class="col-12 text-center">
                    <h3 class="degradado-texto-h1" style="font-size: 40px;">¡Queremos trabajar con vos!</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 px-5 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Gratis</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/año</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Agregá tu Stock</li>
                                <li>Agregá tus Rubros</li>
                                <li>Gestioná tus ventas</li>
                                <li>Sistema de cobro</li>
                                
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-primary" href="{{ route('register') }}">Registrate gratis</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Premium</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$50.000<small class="text-muted fw-light">/año</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Agregá tus proveedores</li>
                                <li>Agregá tus facturas electrónicas</li>
                                <li>Acceso al Dashboard</li>
                                <li>Generá tu reporte en PDF</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contratar</button>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Comparación de planes</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Gratis</th>
                            <th style="width: 22%;">Premium</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Tienda</th>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Stock</th>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Proveedores</th>
                            <td><i class="bi bi-x-circle red"></i></td>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Dashboard</th>
                            <td><i class="bi bi-x-circle red"></i></td>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Reportes</th>
                            <td><i class="bi bi-x-circle red"></i></td>
                            <td><i class="bi bi-check2-circle green"></i></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
</body>
</html>