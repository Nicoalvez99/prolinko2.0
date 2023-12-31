<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/Logo.PNG') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Prolinko') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body class="body">
    <div id="particles-js"></div>
    <div class="row">
        <div class="col-12 col-sm-4 offset-sm-4 px-5">
            {{ $slot }}
        </div>
        <!--<div class="col-7 p-0 fondoNoneLogin">
            <img src="{{ asset('images/fondo.png') }}" class="img-fluid shadow" alt="Fondo Prolinko">
        </div> -->
    </div>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/app-particles.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        let checkUno = document.getElementById('checkUno');
        let checkDos = document.getElementById('checkDos');

        checkUno.addEventListener("click", () => {
            checkDos.disabled = checkUno.checked;
        });

        checkDos.addEventListener("click", () => {
            checkUno.disabled = checkDos.checked;
        });
    </script>
</body>

</html>