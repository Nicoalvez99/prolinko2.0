<x-app-layout>
    @include('layouts.modalStock')
    @include('partials.session-status')
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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input type="text" data-table="table_id" class="form-control light-table-filter" placeholder="Buscador de productos por código, nombre, precio o stock.">
            <table class="table table-hover my-2 table_id">
                <thead>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Rubro</th>
                    <th>Editar</th>
                </thead>
                <tbody>
                    @foreach($stocks as $id => $stock)
                    @if($stock->user_id === Auth::user()->id)
                    @include('layouts.modalEdit')
                    <tr>
                        <td>{{ $stock->codigo }}</td>
                        <td>{{ $stock->nombre }}</td>
                        @if($stock->stock <= 10)
                        <td style="color: red;">Stock crítico({{ $stock->stock }})</td>
                        @else
                        <td>{{ $stock->stock }}</td>
                        @endif
                        <td>${{ $stock->precio }}</td>
                        <td><!-- Poner rubro en Backend --></td>
                        <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $stock->nombre }}"><i class="bi bi-pencil-square"></i></button></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>