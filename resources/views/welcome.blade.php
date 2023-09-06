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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="container-fluid shadow">
        <div class="row">
            <div class="col-6 p-3">
                <img src="{{ asset('images/Prolinko1.PNG') }}" width="200" alt="Prolinko">
            </div>
            <div class="col-6 p-1 text-end">
            @if (Route::has('login'))
                    @auth
                        <button><a href="{{ url('/tienda') }}" class="">Dashboard</a></button>
                    @else
                        <button><a href="{{ route('login') }}" class="">Log in</a></button>

                        @if (Route::has('register'))
                            <button><a href="{{ route('register') }}" class="">Register</a></button>
                        @endif
                    @endauth
            @endif
            </div>
        </div>
    </header>
    <main class="container-fluid">
        <div class="row mt-5 p-3">
            <div class="col-6">
                <h1>Tu solución de Punto de Venta en Linea</h1>
            </div>
        </div>
    </main>
</body>
</html>
