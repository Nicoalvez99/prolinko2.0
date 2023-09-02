<x-app-layout>
    @include('layouts.modalStock')
    @include('layouts.modalRubro')
    @include('partials.session-status')
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
            <div class="my-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar producto</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalRubro">+ Agregar rubro</button>
            </div>
            <div class="row">
                <div class="col-12 my-3">
                    @foreach($rubros as $rubro)
                    <small style="padding: 10px;" class="alert alert-success">{{ $rubro->nombre }}</small>
                    @endforeach
                </div>
            </div>
            <input type="text" data-table="table_id" class="form-control light-table-filter" placeholder="Buscador de productos por código, nombre, precio o stock.">
            <table class="table table-hover my-2 table_id">
                <thead>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Rubro</th>
                    <th>Acción</th>
                </thead>
                @if(count($stocks) > 0)
                <tbody>
                    @foreach($stocks as $id => $stock)
                    @if($stock->user_id === Auth::user()->id)
                    @include('layouts.modalEdit')
                    <tr>
                        <td>{{ $stock->codigo }}</td>
                        <td>{{ $stock->nombre }}</td>
                        @if($stock->stock <= 10) <td style="color: red;">Stock crítico({{ $stock->stock }})</td>
                            @else
                            <td>{{ $stock->stock }}</td>
                            @endif
                            <td>${{ $stock->precio }}</td>
                            <td>{{ $stock->rubro }}</td>
                            <td class="d-flex">
                                <button class="botonEdit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $stock->id }}"><i class="bi bi-pencil-square"></i></button>
                                <form action="{{ route('producto.delete', $stock) }}" method="post">
                                    @csrf @method('delete')
                                    <button type="submit" class="botonDelete mx-2"><i class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                @endif
                @if(count($stocks) == 0)
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            Aún no hay productos en stock.
                        </div>
                    </div>
                </div>
                @endif
            </table>
        </div>
    </section>
</x-app-layout>