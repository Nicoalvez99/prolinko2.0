<!-- Modal -->
<form action="{{ route('proveedor.store') }}" method="post">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proveedor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="codigo">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="telefono">Telefono</label>
                        <input type="number" name="telefono" id="telefono" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="btnAgregarProducto" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

</