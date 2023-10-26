<x-app-layout>
    <div class="row">
        <div class="col-11">
            <h2 style="font-family: 'Poppins', sans-serif;" class="my-2">Configuraciónes generales</h2>
        </div>
        <div class="col-1 text-end">
            <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <i class="bi bi-question-circle"></i>Ayuda</a>
            @include('layouts.offcanvas')
        </div>
    </div>
    <form action="" method="post">
        @csrf @method('patch')
        <div class="row d-block">
            <div class="col-12 col-sm-4">
                <label>ID único</label>
                <div class="d-flex">
                    <input type="text" class="form-control" value="{{ Auth::user()->id_random }}" disabled>
                    <button type="button" class="btn btn-outline-dark mx-1" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="¡ID copiado!">Copiar</button>
                </div>
            </div>
            <div class="col-4">
                <label for="cantidad">Tipo de venta</label>
                <select name="optCantidad" class="form-control" id="">
                    <option value="seleccionar" disabled>Seleccionar</option>
                    <option value="Cantidad" {{ $tipoDeTienda == 'Cantidad' ? 'selected' : '' }}>Cantidad</option>
                    <option value="Metros" {{ $tipoDeTienda == 'Metros' ? 'selected' : '' }}>Metros</option>
                    <option value="Kilogramos" {{ $tipoDeTienda == 'Kilogramos' ? 'selected' : '' }}>Kilogramos</option>
                </select>
            </div>
            <div class="col-4 my-3">
                <label>Nombre de la Impresora</label>
                <input type="text" name="impresora" class="form-control" value="{{ Auth::user()->impresora }}">
            </div>
            <h4 style="font-family: 'Poppins', sans-serif;">Configuración de PDF</h4>
            <div class="col-4 my-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Agregar productos
                </label>
            </div>
            <div class="col-4 my-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Hisotrial
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-success my-2">Guardar</button>
    </form>
    @include('partials.session-status')
</x-app-layout>