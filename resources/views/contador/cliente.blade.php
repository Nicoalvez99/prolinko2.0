<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prolinko - Clientes</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('../css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/sb-admin-2.min.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.navegacion')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h1 mb-0 text-gray-800">{{ $nombre }}</h1>
                    </div>
                    <h3 class="h3 mb-0 text-gray-800">{{ $dni }}</h3>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-12 p-5 mb-5">
                        <div class="shadow p-2">
                            <canvas id="myChartMensual"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row visually-hidden">
                    <div class="col-6">
                        <p>ventas del mes enero: <span id="enero">{{ $ventasPorMeses['January'] ?? 0 }}</span></p>
                        <p>ventas del mes febrero: <span id="febrero">{{ $ventasPorMeses['February'] ?? 0 }}</span></p>
                        <p>ventas del mes marzo: <span id="marzo">{{ $ventasPorMeses['March'] ?? 0 }}</span></p>
                        <p>ventas del mes abril: <span id="abril">{{ $ventasPorMeses['April'] ?? 0 }}</span></p>
                        <p>ventas del mes mayo: <span id="mayo">{{ $ventasPorMeses['May'] ?? 0 }}</span></p>
                        <p>ventas del mes junio: <span id="junio">{{ $ventasPorMeses['June'] ?? 0 }}</span></p>
                        <p>ventas del mes julio: <span id="julio">{{ $ventasPorMeses['July'] ?? 0 }}</span></p>
                        <p>ventas del mes agosto: <span id="agosto">{{ $ventasPorMeses['August'] ?? 0 }}</span></p>
                        <p>ventas del mes septiembre: <span id="septiembre">{{ $ventasPorMeses['September'] ?? 0 }}</span></p>
                        <p>ventas del mes octubre: <span id="octubre">{{ $ventasPorMeses['October'] ?? 0 }}</span></p>
                        <p>ventas del mes noviember: <span id="noviembre">{{ $ventasPorMeses['November'] ?? 0 }}</span></p>
                        <p>ventas del mes diciembre: <span id="diciembre">{{ $ventasPorMeses['December'] ?? 0 }}</span></p>
                    </div>
                    <div class="col-6"></div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Prolinko 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('./js/chartMensual.js') }}"></script>
    <script>
        window.onload = function() {
            const elementos = document.querySelectorAll(".contador");

            elementos.forEach(elemento => {
                const valorFinal = parseInt(elemento.textContent, 10);
                let valorActual = 0;

                const incremento = Math.ceil(valorFinal / 100);

                const intervalo = setInterval(function() {
                    valorActual += incremento;
                    elemento.textContent = valorActual;

                    if (valorActual >= valorFinal) {
                        elemento.textContent = valorFinal;
                        clearInterval(intervalo);
                    }
                }, 20);
            });
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('../bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('../js/sb-admin-2.min.js') }}"></script>


</body>

</html>