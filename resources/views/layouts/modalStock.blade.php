<!-- Modal -->
<form action="{{ route('productos.store', 'producto') }}" method="post">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header backgroundModals">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Nuevo producto</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="codigo">Código</label>
                        <input type="number" name="codigo" id="codigo" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="rubro">Rubro</label>
                        <select name="rubro" id="" class="form-control">
                            <option value="seleccionar" selected>Seleccionar</option>
                            @foreach($rubros as $rubro)
                            <option value="{{ $rubro->nombre }}">{{ $rubro->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="btnAgregarProducto" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</form>