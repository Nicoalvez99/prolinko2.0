<x-app-layout>
    <div class="row my-3">
        @include('layouts.modalProveedor')
        <div class="col-6">
            <h1>Mis Proveedores</h1>
        </div>
        <div class="col-6">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar proveedor</button>
        </div>
    </div>
    <div class="row my-5">
        @foreach($proveedores as $proveedor)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$proveedor->nombre}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $proveedor->telefono }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $proveedor->email }}</h6>
                    <p class="card-text">{{ $proveedor->descripcion }}</p>
                    <div class="text-center my-2">
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $proveedor->direccion }}</h6>
                    </div>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>