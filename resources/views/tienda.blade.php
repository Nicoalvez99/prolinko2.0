<x-app-layout>
    @include('layouts.modal')
    @include('layouts.modalAumento')
    @include('layouts.modalDescuento')
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
                    <label for="cantidad">{{ Auth::user()->tipoDeTienda }}</label>
                    <input type="number" step="0.01" name="cantidad" class="form-control">
                </div>
                <button type="submit" name="btnAgregarCompra" class="btn btn-primary mt-2">Agregar a la compra</button>
            </form>
        </div>
        <div class="col-12 col-sm-6 my-2">
            <span class="visually-hidden" id="total">{{ $compras->sum('precioTotal') }}</span>
            <h2 style="color: green;">Total: ${{ number_format($compras->sum('precioTotal'), 2) }}</h2>
            <h4>Su vuelto es: <span id="vuelto">$0.00</span></h4>
            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Vuelto</button>
                <form action="{{ route('cobro.delete') }}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-success mx-2">Cobrar</button>
                </form>
                <form action="{{ route('compra.store', 'ticket') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger {{ count($compras) == 0 ? 'disabled' : '' }}"><i class="bi bi-printer"></i> Ticket</button>
                </form>
                <div class="btn-group mx-2" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalAumento"><i class="bi bi-arrow-up-short"></i> Aumento</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDescuento"><i class="bi bi-arrow-down-short"></i> Descuento</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row mx-2">
        <table class="table table-hover">
            <thead>
                <th>Código</th>
                <th>Producto</th>
                <th class="paraResponsive">En Stock</th>
                <th>{{ Auth::user()->tipoDeTienda }}</th>
                <th class="paraResponsive">Precio unitario</th>
                <th>Precio total</th>
                <th>Remover</th>
            </thead>
            <tbody>
                @if(count($compras) > 0)
                @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->codigo }}</td>
                    <td>{{ $compra->nombre }}</td>
                    <td class="paraResponsive">{{ $compra->stock }}</td>
                    @if(Auth::user()->tipoDeTienda == 'Kilogramos')
                    <td>{{ $compra->cantidadKg }}</td>
                    @else
                    <td>{{ $compra->cantidad }}</td>
                    @endif
                    <td class="paraResponsive">${{ $compra->precio }}</td>
                    @if(Auth::user()->tipoDeTienda == 'Kilogramos')
                    <td>${{ number_format($compra->precio * $compra->cantidadKg, 2) }}</td>
                    @else
                    <td>${{ number_format($compra->precio * $compra->cantidad, 2) }}</td>
                    @endif
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