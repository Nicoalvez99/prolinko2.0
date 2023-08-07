<x-app-layout>
    @include('layouts.modalStock')
    <div class="row">
        <div class="col-12 text-end my-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar producto</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h1 style="font-size: 60px;">Mi Stock</h1>
        </div>
    </div>
    <section class="col-12">
        <div class="mx-5">
            <button class="btn btn-primary my-2">Editar</button>
            <input type="text" class="form-control" placeholder="Buscador de productos por código, nombre, precio o stock.">
            <table class="table table-hover my-2">
                <thead>
                    <th>#</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Editar</th>
                </thead>
                <tbody>
                    @foreach($stocks as $stock)
                    <tr>
                        <td>{{ $stock->id }}</td>
                        <td>{{ $stock->codigo }}</td>
                        <td>{{ $stock->nombre }}</td>
                        <td>{{ $stock->stock }}</td>
                        <td>${{ $stock->precio }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>