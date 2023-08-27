<x-app-layout>
    @include('layouts.modal')
    <!-- Cuerpo de la Tienda -->
    <div class="row container">
        <div class="col-12 col-sm-6 my-2">
            <form action="{{ route('compra.store', 'compra') }}" method="post">
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
        <div class="col-12 col-sm-6 my-2">
            <h2 style="color: green;">Total: ${{ number_format($compras->sum('precioTotal'), 2) }}</h2>
            <h4>Su vuelto es: <span id="vuelto">$0.00</span></h4>
            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Vuelto</button>
                <form action="{{ route('cobro.delete') }}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-success mx-2">Cobrar</button>
                </form>
                <form action="{{ route('compra.store', 'ticket') }}" method="post">
                    <button type="submit" class="btn btn-danger {{ count($compras) == 0 ? 'disabled' : '' }}">Ticket</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row mx-2">
        <table class="table table-hover">
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
                @if(count($compras) > 0)
                @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->codigo }}</td>
                    <td>{{ $compra->nombre }}</td>
                    <td>{{ $compra->stock }}</td>
                    <td>{{ $compra->cantidad }}</td>
                    <td>${{ $compra->precio }}</td>
                    <td>${{ number_format($compra->precio * $compra->cantidad, 2) }}</td>
                    <form action="{{ route('compra.delete', $compra) }}" method="post">
                        @csrf @method('delete')
                        <td><button type="submit" class="btn btn-danger" name="delete"><i class="bi bi-trash3"></i></button></td>
                    </form>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        @if(count($compras) == 0)
        <div class="row">
            <div class="col-12 text-center">
                <div class="alert alert-primary" role="alert">
                    Aún no hay productos en compra.
                </div>
            </div>
        </div>
        @endif
    </div>
    @include('partials.session-status-danger')
    
</x-app-layout>