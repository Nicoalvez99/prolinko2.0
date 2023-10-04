<form action="{{ route('productos.store', 'excel') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="exampleModalExcel" tabindex="-1" aria-labelledby="exampleModalLabelExcel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header backgroundModals">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">¿Tenés tu stock en Excel?</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="custum-file-upload mx-auto label" for="file">
                                <div class="icon">
                                    <lord-icon class="svg1" src="https://cdn.lordicon.com/pqxdilfs.json" trigger="hover" colors="outline:#131432,primary:#606874,secondary:#08a88a,tertiary:#ebe6ef" style="width:135px;height:135px">
                                    </lord-icon>
                                    
                                    <lord-icon class="svg2 d-none" style="background-color: #E1F5E0;" src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" delay="2000" colors="outline:#121331,primary:#121331,secondary:#ebe6ef" style="font-size:100px;">
                                    </lord-icon>
                                </div>
                                <div class="text">
                                    <span id="textContent" style="z-index: 1;">Cargá aqui tu archivo Excel</span>
                                </div>
                                <input type="file" name="excel" id="file">
                            </label>
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