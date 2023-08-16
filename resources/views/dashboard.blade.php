<x-app-layout>
    <div class="row">
        <div class="col-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Productos:</h6>
                        <span>46</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-stack"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Rubros:</h6>
                        <span>7</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Proveedores:</h6>
                        <span>10</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 px-3">
            <div class="my-3 shadow text-center px-3 dashPanel">
                <div class="row">
                    <div class="col-6 caja">
                        <h6 class="total">Ventas:</h6>
                        <span>$46K</span>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-bag-check"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-2">
            <div class="shadow p-2">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-6 p-2">
            <div class="shadow p-2">
                <canvas id="myChartMensual"></canvas>
            </div>
        </div>
    </div>
</x-app-layout>