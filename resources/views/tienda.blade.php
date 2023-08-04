<x-app-layout>
    @include('layouts.modal')
    <!-- Cuerpo de la Tienda -->
    <div class="row container">
        <div class="col-6 my-2">
            <form action="" method="post">
                @csrf
                <div class="col-10 d-block">
                    <label for="codigo">Nombre o código del producto</label>
                    <input type="text" name="codigo" class="form-control" autofocus>
                </div>
                <div class="col-10 d-block">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control">
                </div>
                <button type="submit" name="btnAgregarCompra" class="btn btn-primary mt-2">Agregar a la compra</button>
            </form>
        </div>
        <div class="col-6 my-2">
            <h2 style="color: green;">Total: $0.00</h2>
            <h4>Su vuelto es: $0.00</h4>
            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Vuelto</button>
                <button type="button" class="btn btn-success mx-2">Cobrar</button>
            </div>
        </div>
    </div>
    <div class="row mx-2">
        <table class="table">
            <thead>
                <th>Código</th>
                <th>Producto</th>
                <th>En Stock</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Precio total</th>
                <th>Remover</th>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</x-app-layout>
