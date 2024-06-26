<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Prolinko | Home') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.PNG') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')

    <main class="container-fluid">
        {{ $slot }}
    </main>
    @if(Auth::user()->premium != "Premium")
    <section class="premium">
        <a href="{{ route('plan') }}" target="_blank">
            <svg width="50" heigth="50" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="117.49861mm" viewBox="0 0 416.33366 321.81223" id="svg2" version="1.1" inkscape:version="0.91 r13725" sodipodi:docname="crown-remix.svg">
                <defs id="defs4" />
                <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="0.7" inkscape:cx="355.279" inkscape:cy="39.280992" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="false" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" inkscape:window-width="2495" inkscape:window-height="1416" inkscape:window-x="1985" inkscape:window-y="24" inkscape:window-maximized="1" />
                <metadata id="metadata7">
                    <rdf:RDF>
                        <cc:Work rdf:about="">
                            <dc:format>image/svg+xml</dc:format>
                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                            <dc:title></dc:title>
                        </cc:Work>
                    </rdf:RDF>
                </metadata>
                <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-77.548048,-177.17071)">
                    <g id="g14596" transform="matrix(10.62325,0,0,10.62325,-22374.779,-17120.731)">
                        <path sodipodi:nodetypes="cscccsssscccssssccccsssscccssscccscccccccccccc" inkscape:connector-curvature="0" style="fill:#fcce00;fill-opacity:1;stroke:#f5981b;stroke-width:3;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="m 2133.1038,1629.806 c -0.9776,0 -1.7702,1.009 -1.7702,2.2536 0,1.0451 0.5604,1.9204 1.3184,2.1753 l -3.0487,9.2295 -4.4348,-7.1363 c 0.3433,-0.4111 0.5594,-0.9921 0.5594,-1.6394 0,-1.2446 -0.7926,-2.2535 -1.7702,-2.2535 -0.9777,0 -1.7702,1.0089 -1.7702,2.2535 0,1.2446 0.7925,2.2536 1.7702,2.2536 0.052,0 0.103,-0.01 0.1536,-0.012 l -1.6042,8.5409 -4.3733,-3.9555 c 0.2575,-0.3914 0.4149,-0.8932 0.4149,-1.4437 0,-1.2446 -0.7925,-2.2536 -1.7702,-2.2536 -0.9776,0 -1.7702,1.009 -1.7702,2.2536 0,1.2446 0.7926,2.2535 1.7702,2.2535 0.2646,0 0.5152,-0.075 0.7407,-0.2073 l 2.4064,8.1927 26.3132,0 2.5416,-7.3906 c 0.2011,0.101 0.4192,0.1565 0.6485,0.1565 0.9776,0 1.7702,-1.0089 1.7702,-2.2535 0,-1.2447 -0.7926,-2.2536 -1.7702,-2.2536 -0.9777,0 -1.7702,1.0089 -1.7702,2.2536 0,0.4635 0.1096,0.8937 0.2981,1.2519 l -3.6541,3.1222 -1.8809,-7.911 c 0.8489,-0.1662 1.4998,-1.0951 1.4998,-2.2222 0,-1.2447 -0.7926,-2.2536 -1.7702,-2.2536 -0.9777,0 -1.7702,1.0089 -1.7702,2.2536 0,0.6871 0.2429,1.3003 0.6238,1.7137 l -4.0168,6.5964 -3.2484,-9.2138 c 0.6625,-0.3259 1.134,-1.1426 1.134,-2.101 0,-1.2446 -0.7925,-2.2535 -1.7702,-2.2535 z m -13.098,19.9452 0,4.0329 26.1824,-0.065 0,-3.789 z m 0.089,3.3804 -0.2679,3.9676 26.3565,0 0.024,-3.8325 z" id="path3787-1-8-5" />
                        <g transform="matrix(0.10436597,0,0,0.13286277,1711.6125,1556.739)" id="g13597-7">
                            <path sodipodi:nodetypes="cscccsssscccssssccccsssscccssscccscccccccccccc" inkscape:connector-curvature="0" style="fill:#fcce00;fill-opacity:1" d="m 4038.5893,549.9434 c -9.3676,0 -16.9616,7.594 -16.9616,16.9616 0,7.8664 5.3694,14.4541 12.6326,16.3726 l -29.2116,69.4662 -42.4925,-53.7117 c 3.2887,-3.0936 5.3594,-7.467 5.3594,-12.3386 0,-9.3676 -7.594,-16.9616 -16.9616,-16.9616 -9.3676,0 -16.9616,7.594 -16.9616,16.9616 0,9.3676 7.594,16.9616 16.9616,16.9616 0.4964,0 0.9868,-0.046 1.4724,-0.089 l -15.371,64.2834 -41.9036,-29.7713 c 2.4675,-2.9457 3.9754,-6.7227 3.9754,-10.8658 0,-9.3676 -7.594,-16.9616 -16.9615,-16.9616 -9.3676,0 -16.9616,7.594 -16.9616,16.9616 0,9.3676 7.594,16.9616 16.9616,16.9616 2.5355,0 4.9365,-0.5634 7.0967,-1.5608 l 23.0574,61.6629 252.1244,0 24.3531,-55.6255 c 1.9268,0.7604 4.0162,1.1779 6.2134,1.1779 9.3676,0 16.9616,-7.594 16.9616,-16.9616 0,-9.3676 -7.594,-16.9616 -16.9616,-16.9616 -9.3676,0 -16.9616,7.594 -16.9616,16.9616 0,3.489 1.0502,6.7269 2.8563,9.4231 l -35.0124,23.4994 -18.0217,-59.5427 c 8.1334,-1.2511 14.3702,-8.2424 14.3702,-16.726 0,-9.3676 -7.594,-16.9616 -16.9616,-16.9616 -9.3676,0 -16.9615,7.594 -16.9615,16.9616 0,5.1715 2.328,9.7868 5.9778,12.8983 l -38.4877,49.6484 -31.1255,-69.3483 c 6.3479,-2.4526 10.8658,-8.5999 10.8658,-15.8129 0,-9.3676 -7.594,-16.9616 -16.9616,-16.9616 z m -125.5007,150.11891 -1.7111,29.86229 252.539,0 0,-28.51817 z m -1.438,26.26133 -0.2731,29.04336 252.539,0 -0.3954,-28.84574 z" id="path3787-1-8" />
                        </g>
                        <path inkscape:connector-curvature="0" id="path3787-1-8-3" d="m 2133.0639,1629.7931 c -0.9777,0 -1.7696,1.0093 -1.7696,2.2539 0,1.0452 0.5604,1.9189 1.3184,2.1738 l -3.0488,9.2305 -4.4356,-7.1367 c 0.3432,-0.411 0.5606,-0.9915 0.5606,-1.6387 0,-0.3089 -0.05,-0.603 -0.1387,-0.8711 -1.0047,0.1869 -2.1225,0.8392 -3.2324,1.8223 0.2823,0.7674 0.89,1.3027 1.5996,1.3027 0.052,0 0.1036,-0.012 0.1543,-0.014 l -1.6035,8.5411 -4.375,-3.9551 c 0.1655,-0.2517 0.284,-0.5524 0.3515,-0.8789 -0.3157,0.5633 -0.6229,1.1337 -0.8926,1.7304 l 0.4961,1.6856 c 2.6917,1.0324 4.7275,4.5865 6.4668,6.043 1.9656,1.6458 4.7654,2.6019 7.5293,2.6992 2.7639,0.097 6.7431,-1.3381 8.9258,-2.6992 2.1774,-1.3578 4.2791,-5.9564 7.4727,-6.3086 l 0.012,-0.033 c -0.1954,-0.5283 -0.419,-1.0541 -0.6582,-1.5743 l -3.5332,3.0176 -1.8809,-7.9101 c 0.5936,-0.1163 1.085,-0.6102 1.3301,-1.2793 -0.9992,-1.0624 -2.0214,-1.8794 -2.9785,-2.3418 -0.2416,0.3852 -0.3926,0.8671 -0.3926,1.3984 0,0.6871 0.2441,1.2995 0.625,1.7129 l -4.0176,6.5977 -3.248,-9.2149 c 0.6625,-0.3258 1.1328,-1.1413 1.1328,-2.0996 0,-1.2446 -0.7919,-2.2539 -1.7695,-2.2539 z" style="fill:#fee140;fill-opacity:1" />
                    </g>
                </g>
            </svg>
        </a>
    </section>
    @endif
    <footer>
        <div class="row">
            @if(session()->has('mensaje'))
            <div class="col-12 col-sm-2 offset-sm-5 alert alert-success sesionWelcome text-center">
                {{ session()->get('mensaje') }}
            </div>
            @php
            session()->forget('mensaje');
            @endphp
            @endif
        </div>
        <div class="d-none">
            <a href="https://lordicon.com/">Icons by Lordicon.com</a>
        </div>
        @include('partials.notification')
    </footer>
    <script>
        $(document).ready(function() {
            function loadNotifications() {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/notification',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.length > 0) {
                            data.forEach(function(notification) {
                                // Comprueba si esta notificación ya existe en el contenedor
                                if ($('#liveToast' + notification.id).length == 0) {
                                    var notificationHtml = `
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast${notification.id}" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="{{ asset('images/logo.PNG') }}" width="20" class="rounded me-2" alt="prolinko">
                                        <strong class="me-auto">Notificación</strong>
                                        <small>11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hola! ${notification.nombre} quiere contactarte, su email es: ${notification.email}
                                        <div class="row">
                                            <div class="col-12 d-flex my-1">
                                                <form action="" method="post">
                                                    <input type="hidden" name="_token" value="${csrfToken}">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Denegar</button>
                                                </form>
                                                <form action="{{ route('notification.accept') }}" method="post" class="notification-accept-form">
                                                    <input type="hidden" name="_token" value="${csrfToken}">
                                                    <input type="hidden" name="id_contador" value="${notification.id_contador}" class="visually-hidden">
                                                    <button type="submit" class="btn btn-success btn-sm mx-1"><i class="bi bi-check-circle"></i> Permitir</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;
                                    $('#notifications-container').append(notificationHtml);
                                }
                            });
                        }
                    },
                    error: function() {
                        console.log('Error al cargar las notificaciones.');
                    }
                });
            }

            loadNotifications();

            setInterval(loadNotifications, 5000);
        });
    </script>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <script src="{{ asset('js/contador.js') }}"></script>
    <script src="{{ asset('js/modalFactura.js') }}"></script>
    <script src="{{ asset('js/vuelto.js') }}"></script>
    <script src="{{ asset('js/descuento.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/chartSemana.js') }}"></script>
    <script src="{{ asset('js/chartMensual.js') }}"></script>
</body>

</html>