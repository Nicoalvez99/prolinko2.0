<x-app-layout>
    <div class="row">
        <div class="col-6 col-sm-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Productos:</h6>
                        <span class="contador">{{ $totalProductos }}</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-stack"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Rubros:</h6>
                        <span class="contador">{{ $totalRubros }}</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Proveedores:</h6>
                        <span class="contador">{{ $totalProveedores }}</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Ventas:</h6>
                        <div class="d-flex">
                            <p class="m-0">$</p><span class="contador">{{ $totalHistorial }}</span>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-bag-check"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 p-2">
            <div class="shadow p-2">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-12 col-sm-6 p-2">
            <div class="shadow p-2">
                <canvas id="myChartMensual"></canvas>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="shadow p-2">
                <div class="row">
                    <div class="col-8">
                        <h3>Historial de ventas por semana</h3>
                    </div>
                    <div class="col-4 text-end">
                        <form action="{{ route('historial.semana.delete') }}" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-grid-3x3"></i> Eliminar historial</button>
                        </form>
                    </div>
                </div>

                <input type="text" class="form-control light-table-filter mb-1" data-table="table_id" placeholder="Buscador por fecha, producto o total">
                <div class="tablaHistorial">
                    <table class="table table-hover table_id">
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
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="shadow p-2">
                <div class="row">
                    <div class="col-8">
                        <h3>Historial de ventas por mes</h3>
                    </div>
                    <div class="col-4 text-end">
                        <form action="{{ route('historial.semana.delete') }}" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-grid-3x3"></i> Eliminar historial</button>
                        </form>
                    </div>
                </div>

                <input type="text" class="form-control light-table-filter mb-1" data-table="table_id" placeholder="Buscador por fecha, producto o total">
                <div class="tablaHistorial">
                    <table class="table table-hover table_id">
                        <thead>
                            <th>Fecha y hora</th>
                            <th>Productos</th>
                            <th>Rubros</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            @foreach($historialmes as $historial)
                            <tr>
                                <td>{{ $historial->created_at }}</td>
                                <td>{{ $historial->aProductos }}</td>
                                <td>{{ $historial->aRubros }}</td>
                                <td>${{ $historial->total }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 flex-end">
            <form action="{{ route('dashboard.pdf') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Generar PDF <i class="bi bi-file-pdf"></i></button>
            </form>
        </div>
    </div>
    <div class="row visually-hidden">
        <div class="col-12 col-sm-6">
            <p>Ventas del día domingo: <span id="domingo">{{ $ventasPorDiasSemana['domingo'] ?? 0 }}</span></p>
            <p>Ventas del día Lunes: <span id="lunes">{{ $ventasPorDiasSemana['lunes'] ?? 0 }}</span></p>
            <p>Ventas del día Martes: <span id="martes">{{ $ventasPorDiasSemana['martes'] ?? 0 }}</span></p>
            <p>Ventas del día Miercoles: <span id="miercoles">{{ $ventasPorDiasSemana['miércoles'] ?? 0 }}</span></p>
            <p>Ventas del día Jueves: <span id="jueves">{{ $ventasPorDiasSemana['jueves'] ?? 0 }}</span></p>
            <p>Ventas del día viernes: <span id="viernes">{{ $ventasPorDiasSemana['viernes'] ?? 0 }}</span></p>
            <p>Ventas del día sabado: <span id="sabado">{{ $ventasPorDiasSemana['sábado'] ?? 0 }}</span></p>
        </div>
        <div class="col-12 col-sm-6">
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
            <p>ventas del mes diciembre: <span id="diciembre">{{ $ventasPorMeses['Dicember'] ?? 0 }}</span></p>
        </div>
    </div>
    @include('partials.session-status')
</x-app-layout>