<div class="modal fade" id="exampleModalRubro" tabindex="-1" aria-labelledby="exampleModalLabelRubro" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header backgroundModals">
                <h2 class="modal-title fs-5" id="exampleModalLabel">Nuevo Rubro</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('productos.store', 'rubro') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="btnAgregarRubro" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>