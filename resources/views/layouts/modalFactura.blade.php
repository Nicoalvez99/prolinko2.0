<!-- Modal -->
<form action="{{ route('proveedor.store', 'factura') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="exampleModalFactura" tabindex="-1" aria-labelledby="exampleModalLabelFactura" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header backgroundModals">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Nueva Factura</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="custum-file-upload mx-auto label" for="file">
                                <div class="icon">
                                    <svg class="svg1" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </g>
                                    </svg>
                                    <svg class="svg2 d-none" style="background-color: #E1F5E0;" xmlns="http://www.w3.org/2000/svg" fill="#4CAF50" viewBox="0 0 24 24">
                                        <path d="M9.75 20.25L3.75 14.25L2.34 15.66L9.75 23.06L22.34 10.47L20.93 9.06L9.75 20.25Z"></path>
                                    </svg>
                                </div>
                                <div class="text">
                                    <span id="textContent">Cargá aqui tu factura</span>
                                </div>
                                <input type="file" name="imagen" id="file">
                            </label>
                        </div>
                        <div class="col-12 my-1">
                            <label for="txtProveedor">Proveedor:</label>
                            <select name="proveedor" class="form form-control" id="">
                                <option value="Seleccionar" disabled selected>Seleccionar</option>
                                @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->nombre }}">{{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="btnAgregarProducto" class="btn btn-primary">Subir</button>
                </div>
            </div>
        </div>
    </div>
</form>