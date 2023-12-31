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
    <header class="container-fluid shadow">
        <div class="row">
            <div class="col-5 col-sm-6 d-flex p-1">
                <img src="{{ asset('images/IMG_3462.PNG') }}" width="50" height="50" alt="Prolinko">
                <nav class="nav navbar navbar-expand-lg">
                    <ul class="d-flex my-2">
                        <li><a href="" class="mx-2">Inicio</a></li>
                        <li><a href="" class="mx-2">Tiendas</a></li>
                        <li><a href="{{ url('/contadores') }}" class="mx-2">Contadores</a></li>
                        <li><a href="" class="mx-2">Nosotros</a></li>
                        <li><a href="" class="mx-2">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </header>
    <main class="container-fluid p-0">
        <div class="row p-3 " data-aos="fade-up">
            <div class="col-12 my-5 text-center">
                <h1 class="degradado-texto-h1">Prolinko</h1>
                <hr>
                <h2 class="subtitulo">Tu solución de <br> Punto de Venta <span class="typed"></span></h2>
                <div class="mt-3 p-1">
                @if (Route::has('login'))
                @auth
                <button class="btn-welcome"><a href="{{ url('/tienda') }}" class="">Tienda</a></button>
                @else
                <button class="btn-welcome"><a href="{{ route('login') }}" class=""><i class="bi bi-fingerprint"></i> Log in</a></button>

                @if (Route::has('register'))
                <button class="btn-welcome"><a href="{{ route('register') }}" class=""><i class="bi bi-person-add"></i> Register</a></button>
                @endif
                @endauth
                @endif
            </div>
            </div>
            
        </div>

        <section class="row beneficios">
            <div class="col-12 col-sm-6 my-auto">
                <h3>¡Tus beneficios con <span class="degradado-texto">Prolinko</span>!</h3>
                <ul class="my-4 lista-check">
                    <li data-aos="fade-right" data-aos-duration="3000">Controla inventario, ventas y clientes en un solo lugar.</li>
                    <li data-aos="fade-right" data-aos-duration="4000">Informes en tiempo real para tomar decisiones informadas.</li>
                    <li data-aos="fade-right" data-aos-duration="5000">Facilita la colaboración con proveedores y equipos.</li>
                    <li data-aos="fade-right" data-aos-duration="6000">Potencia tu negocio con Prolinko: simple y efectivo.</li>
                </ul>
            </div>
            <div class="col-12 col-sm-6">
                <svg data-name="Layer 1" data-aos="fade-up-left" class="img-fluid" xmlns="http://www.w3.org/2000/svg" width="531" height="600" viewBox="0 0 931 633.23506" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="a2bfc056-849c-4ec6-91e1-f91319e9ec32" data-name="Group 41">
                        <rect id="a3c1d3c4-4e90-4475-ab67-d6aa194b0cda" data-name="Rectangle 62" x="120.36301" y="297.37505" width="703.57599" height="333.85901" fill="#e6e6e6" />
                        <rect id="e222743c-d215-4483-8b06-896263acb449" data-name="Rectangle 75" x="140.48199" y="326.00405" width="663.33899" height="278.54901" fill="#fff" />
                        <rect id="a5e02001-7de0-497e-bd39-9bc4e3f553c3" data-name="Rectangle 76" x="675.71198" y="377.85103" width="17.177" height="17.177" fill="#e6e6e6" />
                        <rect id="a818f6b2-9049-4be6-858a-9eef7b067dda" data-name="Rectangle 77" x="217.543" y="377.85103" width="17.177" height="17.177" fill="#6c63ff" />
                        <rect id="e2dc3e68-3640-4751-a187-2d32846d30c0" data-name="Rectangle 78" x="217.04599" y="427.05306" width="57.258" height="57.258" fill="#e6e6e6" />
                        <rect id="a0ba3db0-8b31-4423-a256-2a0dc53933ae" data-name="Rectangle 80" x="120.063" y="278.08605" width="703.57599" height="29.89" fill="#6c63ff" />
                        <circle id="bb2c25e8-a4f5-477f-938a-ba2f4a6c137d" data-name="Ellipse 90" cx="142.27499" cy="299.66203" r="5.54" fill="#fff" />
                        <circle id="eb283697-d5f2-44f6-a11b-2e5adde2f565" data-name="Ellipse 91" cx="163.303" cy="299.66203" r="5.54" fill="#fff" />
                        <circle id="e7e312b6-8acc-452e-9cd4-4f6349f5007f" data-name="Ellipse 92" cx="184.33199" cy="299.66203" r="5.54" fill="#fff" />
                        <rect id="a0963db8-a572-4a40-8f57-be0fd9c2d8c3" data-name="Rectangle 60" y="631.23506" width="931" height="2" fill="#e6e6e6" />
                        <rect id="b36c2a8e-a9be-4d37-810e-923692d19cdb" data-name="Rectangle 81" x="333.68799" y="432.78005" width="140.28101" height="8.053" fill="#e6e6e6" />
                        <rect id="aa1d26da-49a8-41de-8cb5-b8f8184fe0ae" data-name="Rectangle 82" x="333.68799" y="462.15401" width="216.625" height="8.053" fill="#6c63ff" />
                        <rect id="ac31809e-ecba-4f59-90db-296bd3050334" data-name="Rectangle 83" x="333.68799" y="489.82704" width="176.54401" height="8.053" fill="#e6e6e6" />
                        <rect id="b84288f0-dbbf-4761-bd75-4b898461b36c" data-name="Rectangle 84" x="333.68799" y="517.39803" width="103.064" height="8.053" fill="#e6e6e6" />
                        <rect id="bd93c4e7-cb78-4a87-ab16-23d001bc2737" data-name="Rectangle 85" x="333.68799" y="544.96706" width="155.55" height="8.053" fill="#e6e6e6" />
                        <rect id="bba4eb33-6fa2-4df7-a8d1-83644e8e5d67" data-name="Rectangle 88" x="705.29602" y="377.85103" width="17.177" height="17.177" fill="#e6e6e6" />
                        <rect id="f2a4bb2b-ea4d-4e49-9a1a-d309a808d159" data-name="Rectangle 90" x="734.87903" y="377.85103" width="17.177" height="17.177" fill="#e6e6e6" />
                        <circle id="b03b494e-dda4-489e-89cd-b5d563742355" data-name="Ellipse 88" cx="717.17099" cy="490.56602" r="34.884" fill="#6c63ff" opacity="0.997" style="isolation:isolate" />
                        <circle id="e6d27be5-fed8-4aaf-9e55-a91224dd363a" data-name="Ellipse 97" cx="188.489" cy="55.18403" r="39.273" fill="#2f2e41" />
                        <path id="fe6a134f-9064-47d4-b31c-90708736d4a8-261" data-name="Path 630" d="M225.253,524.59153h-17.2l-8.181-66.326h25.379Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                        <path id="fa849e20-ba67-4278-81ee-d1167b7aa6dc-262" data-name="Path 631" d="M195.775,519.67751h33.163v20.881H174.894a20.881,20.881,0,0,1,20.881-20.881Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                        <path id="a88ec020-2ed6-4a48-814f-7c14aebc27ac-263" data-name="Path 632" d="M198.41,514.99452l-16.406-5.149,12.052-65.735,24.214,7.6Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                        <path id="b4b30a85-97bd-4362-a855-e6f58c99cba3-264" data-name="Path 633" d="M171.746,501.48248l31.64245,9.93009-6.25227,19.923-51.56447-16.18206A20.881,20.881,0,0,1,171.747,501.48278h0Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                        <path id="f42c0410-8a39-47c2-9be6-23f0eea84aff-265" data-name="Path 634" d="M204.005,488.52754a6.25819,6.25819,0,0,1-2.2-.4l-12.655-4.743a6.334,6.334,0,0,1-3.947-7.271c3.185-14.321,14.04-63.077,19.984-89.228,7.049-31.019,109.885-36.783,114.259-37.013l.36-.019,11.56811,14.531c4.18,13.436,2.855,23.916-3.938,31.15-19.823,21.105-79.006,8.009-86.063,6.352l-31.45508,82.577a6.33,6.33,0,0,1-5.91,4.064Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                        <path id="bb9232ec-2887-4985-b220-30c2c46adf62-266" data-name="Path 635" d="M222.239,498.34647a6.25524,6.25524,0,0,1-2.2-.4l-12.651-4.744a6.333,6.333,0,0,1-3.947-7.271c3.185-14.321,14.04-63.077,19.984-89.228,7.049-31.019,109.885-36.783,114.259-37.013l.36-.019,11.564,14.53509c4.18,13.436,2.855,23.916-3.938,31.15-19.822,21.1-79.006,8.009-86.063,6.351l-31.459,82.57391a6.33,6.33,0,0,1-5.91,4.064Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                        <path id="bf752b52-878a-4c47-8a02-c5dd3ca125d0-267" data-name="Path 636" d="M185.638,296.33752a14.79869,14.79869,0,0,1,1.241,1.966l69.178,7.288,9.96-13.65406,22.569,12.335-19.559,33.132-84.841-21.632a14.722,14.722,0,1,1,1.454-19.436Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                        <path id="ae95fee3-8471-4436-bacf-47da3ee4edce-268" data-name="Path 637" d="M346.397,379.7705a6.31418,6.31418,0,0,1-2.875-.7c-13.833-7.034-40.769-19.215-65.747-21.764a6.16111,6.16111,0,0,1-4.342-2.454,6.33787,6.33787,0,0,1-1.169-4.924c2.254-12.477,7.424-44.249,6.758-69.712a34.5,34.5,0,0,1,26.063-34.319h0a112.01431,112.01431,0,0,1,13.9-2.741,34.77894,34.77894,0,0,1,38.655,40.342c-4.454,26.388-8.945,63.244-5.042,88.972a6.32194,6.32194,0,0,1-2.551,6.1A6.21265,6.21265,0,0,1,346.397,379.7705Z" transform="translate(-134.5 -133.38247)" fill="#ccc" />
                        <path id="f8a5325a-7268-4362-a255-60631c9bfca5-269" data-name="Path 638" d="M280.303,312.65247a6.31383,6.31383,0,0,1-2.506-.523l-18.021-7.8a6.31905,6.31905,0,0,1-3.285-8.3l13.93-32.179a16.13,16.13,0,1,1,29.69678,12.602q-.04514.10629-.0918.212l-13.93,32.18A6.328,6.328,0,0,1,280.303,312.65247Z" transform="translate(-134.5 -133.38247)" fill="#ccc" />
                        <circle id="e89a297e-1488-4b62-b167-7800139de88b" data-name="Ellipse 98" cx="187.054" cy="64.37704" r="34.45" fill="#feb8b8" />
                        <path id="bfc7d311-3606-4cd9-8309-fa0ce7944c94-270" data-name="Path 639" d="M286.484,180.83051a124.25543,124.25543,0,0,0,53.757,17.713l-5.667-6.789a41.63834,41.63834,0,0,0,12.863,2.554,14.08706,14.08706,0,0,0,11.483-5.375,13.1,13.1,0,0,0,.877-12.1,24.81648,24.81648,0,0,0-7.807-9.763,46.4819,46.4819,0,0,0-43.263-7.732,27.779,27.779,0,0,0-12.922,8.289c-3.266,4.029-9.553,7.619-7.881,12.528Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                        <path id="ec73fef4-50dc-4543-9636-3b24ac170308-271" data-name="Path 640" d="M324.634,151.80952a66.918,66.918,0,0,1,24.345-15.747,34.25283,34.25283,0,0,1,18.443-2.289c6.153,1.238,11.971,5.494,13.688,11.531,1.4,4.936-.046,10.251-2.224,14.9s-5.086,8.956-6.848,13.776a31.441,31.441,0,0,0,31.638,42.163c-6.045.811-11.617,3.652-17.526,5.163s-12.883,1.41-17.274-2.824c-4.646-4.479-4.739-11.761-4.514-18.21l1-28.762c.17-4.889.316-9.935-1.448-14.5s-5.954-8.56-10.846-8.518c-3.708.031-6.989,2.278-9.963,4.493s-6.121,4.578-9.814,4.908-7.91-2.4-7.634-6.1" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                        <path id="ba6ab2e4-b23b-4027-ba52-bbc91f9115f8-272" data-name="Path 641" d="M263.635,370.92053a15.435,15.435,0,1,1,5.95-29.685h0a14.84081,14.84081,0,0,1,1.839.932l62.755-28.171,1.763-17.02,27.051-.724-.179,28.335a15.26006,15.26006,0,0,1-11.027,14.509l-73.385,20.885a14.45521,14.45521,0,0,1-.5,1.429,15.49207,15.49207,0,0,1-14.26,9.509Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                        <path id="b13d6e0f-103e-49e8-b98c-f9f1d84e31ae-273" data-name="Path 642" d="M360.702,310.13648a6.30547,6.30547,0,0,1-2.471.668l-19.6,1.205a6.319,6.319,0,0,1-6.687-5.912l-2.151-35a16.13045,16.13045,0,0,1,32.2-1.981l2.152,35a6.327,6.327,0,0,1-3.441,6.02Z" transform="translate(-134.5 -133.38247)" fill="#ccc" />
                        <rect id="ef169b54-99b1-4807-9c68-842c3cbd65db" data-name="Rectangle 91" x="67.888" y="231.25804" width="120.625" height="9.818" rx="1.778" fill="#3f3d56" />
                        <path id="ba69314c-00f4-451f-ada7-fcdfd2edc53a-274" data-name="Path 643" d="M157.405,365.34254v-68.729a9.128,9.128,0,0,1,9.117-9.117H291.355a9.127,9.127,0,0,1,9.117,9.117v68.729a9.127,9.127,0,0,1-9.117,9.117H166.522A9.128,9.128,0,0,1,157.405,365.34254Z" transform="translate(-134.5 -133.38247)" fill="#3f3d56" />
                        <circle id="bf28e027-707c-49c1-b6c0-ef0059b61f2f" data-name="Ellipse 99" cx="95.94" cy="197.59903" r="8.416" fill="#fff" />
                    </g>
                </svg>
            </div>
        </section>
        <div class="fondoAdaptable p-5 mx-0">
            <h3 style="font-family: 'Montserrat', sans-serif; color:aliceblue;">Funciones</h3>
            <div class="row my-5 mx-4">
                <div class="col-12 col-sm-3 px-1 px-sm-4" data-aos="fade-up" data-aos-duration="3000">
                    <i class="bi bi-shop"></i>
                    <h4 style="font-family: 'Josefin Sans', sans-serif;">Tienda</h4>
                    <p>Potencia tus ventas y gestión de cobros con Prolinko. Simplifica el proceso de cobranza y administra transacciones eficientemente. Brinda una experiencia de compra personalizada para fortalecer tus relaciones comerciales.</p>
                </div>
                <div class="col-12 col-sm-3 px-1 px-sm-4" data-aos="fade-up" data-aos-duration="3000">
                    <i class="bi bi-layers"></i>
                    <h4 style="font-family: 'Josefin Sans', sans-serif;">Stock</h4>
                    <p>Con Prolinko, controla tus productos y categorías con facilidad. Agrega, modifica o elimina productos para una gestión ágil de inventario. Empodera tu negocio con flexibilidad y control total.</p>
                </div>
                <div class="col-12 col-sm-3 px-1 px-sm-4" data-aos="fade-up" data-aos-duration="3000">
                    <i class="bi bi-bar-chart-line"></i>
                    <h4 style="font-family: 'Josefin Sans', sans-serif;">Dashboard</h4>
                    <p>Accede a análisis detallados de tus transacciones. Observa estadísticas de compras semanales y mensuales, y explora tu historial de ventas diario, semanal, mensual y anual. Exporta datos esenciales cuando lo necesites. Toma control total con Prolinko.</p>
                </div>
                <div class="col-12 col-sm-3 px-1 px-sm-4" data-aos="fade-up" data-aos-duration="3000">
                    <i class="bi bi-people"></i>
                    <h4 style="font-family: 'Josefin Sans', sans-serif;">Proveedores</h4>
                    <p>Optimiza la gestión de proveedores con Prolinko. Centraliza y administra información de proveedores, incluyendo contactos e historiales de transacciones. Organiza tus facturas fácilmente. Simplifica el abastecimiento y controla tu cadena de suministro.</p>
                </div>
            </div>
        </div>
        <section class="p-5">
            <div class="row pb-3 mt-1">
                <div class="col-12 mb-2 text-center">
                    <lord-icon
                        src="https://cdn.lordicon.com/uukerzzv.json"
                        trigger="loop"
                        delay="2000"
                        colors="primary:#121331,secondary:#16a9c7"
                        style="width:150px;height:150px">
                    </lord-icon>
                    <h3 class="degradado-texto-h1 my-1" style="font-size: 45px;">¡Queremos trabajar con vos!</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 px-2 px-sm-5 mb-5 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Gratis</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/año</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><i class="bi bi-check2 green"></i>Agregá tu Stock</li>
                                <li><i class="bi bi-check2 green"></i>Agregá tus Rubros</li>
                                <li><i class="bi bi-check2 green"></i>Gestioná tus ventas</li>
                                <li><i class="bi bi-check2 green"></i>Sistema de cobro</li>

                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-primary" href="{{ route('register') }}">Registrate gratis</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Premium</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$50.000<small class="text-muted fw-light">/año</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><i class="bi bi-check2 green"></i>Agregá tus proveedores</li>
                                <li><i class="bi bi-check2 green"></i>Agregá tus facturas electrónicas</li>
                                <li><i class="bi bi-check2 green"></i>Acceso al Dashboard</li>
                                <li><i class="bi bi-check2 green"></i>Generá tu reporte en PDF</li>
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
    </main>
    <footer>
        <div class="row">
            <div class="col-12 text-center mb-5">
                <img src="{{ asset('images/logo.PNG') }}" width="40" alt="Prolinko">
                <div class="conteiner">
                    <span class="cita degradado-texto-h1">Parte de tus ventas</span>
                    <span class="cita degradado-texto-h1">Parte de tus sueños</span>
                    <span class="cita degradado-texto-h1">Parte de tus ventas</span>
                    <span class="cita degradado-texto-h1">Parte de tus sueños</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="gray-400">&copy;Prolinko-2023</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>