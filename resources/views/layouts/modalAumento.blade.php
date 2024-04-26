<div class="modal fade" id="exampleModalAumento" tabindex="-1" aria-labelledby="exampleModalLabelAumento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Aumento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <p style="font-size: 30px; color: green;">Total: $</p>
                    <p style="font-size: 30px; color: green;" id="total">{{ number_format($compras->sum('precioTotal'), 2) }}</p>
                </div>
                <label for="vuelto">Aumento en %</label>
                <input type="number" id="aumento" name="vuelto" class="form-control">
                <button type="button" id="btnAumento" class="btn btn-primary mt-2" data-bs-dismiss="modal">Aplicar</button>
            </div>
        </div>
    </div>
</div>