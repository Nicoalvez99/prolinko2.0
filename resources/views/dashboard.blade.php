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
                        <span class="contador">7</span>
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
                        <p>$</p><span class="contador">{{ $totalHistorial }}</span>
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
                <h3>Historial de ventas</h3>
                <input type="text" class="form-control light-table-filter mb-1" data-table="table_id" placeholder="Buscador por fecha, producto o total">
                <div class="tablaHistorial">
                    <table class="table table-hover table_id">
                        <thead>
                            <th>Fecha y hora</th>
                            <th>Productos</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            @foreach($historials as $historial)
                            <tr>
                                <td>{{ $historial->fecha }}</td>
                                <td>{{ $historial->aProductos }}</td>
                                <td>${{ $historial->total }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>