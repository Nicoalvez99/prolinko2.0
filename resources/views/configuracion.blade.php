<x-app-layout>
    <h2 style="font-family: 'Poppins', sans-serif;" class="my-2">Configuraciónes generales</h2>
<form action="" method="post">
    @csrf @method('patch')
    <div class="row">
        <div class="col-4">
            <label for="cantidad">Tipo de venta</label>
            <select name="optCantidad" class="form-control" id="">
                <option value="seleccionar" disabled>Seleccionar</option>
                <option value="Cantidad" {{ $tipoDeTienda == 'Cantidad' ? 'selected' : '' }}>Cantidad</option>
                <option value="Metros" {{ $tipoDeTienda == 'Metros' ? 'selected' : '' }}>Metros</option>
                <option value="Kilogramos" {{ $tipoDeTienda == 'Kilogramos' ? 'selected' : '' }}>Kilogramos</option>
            </select>
            <button type="submit" class="btn btn-success my-2">Guardar</button>
        </div>
    </div>
    
</form>
@include('partials.session-status')
</x-app-layout>