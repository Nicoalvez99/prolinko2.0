<x-app-layout>
    <h2 style="font-family: 'Poppins', sans-serif;" class="my-2">Configuraciónes generales</h2>
<form action="" method="post">
    @csrf @method('patch')
    <div class="row d-block">
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
    </div>
    <button type="submit" class="btn btn-success my-2">Guardar</button>
</form>
@include('partials.session-status')
</x-app-layout>