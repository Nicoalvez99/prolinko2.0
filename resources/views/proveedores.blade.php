<x-app-layout>
    @include('layouts.modalProveedor')
    @include('layouts.modalFactura')
    <div class="row my-3">
        <div class="col-6">
            <h1>Mis Proveedores</h1>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar proveedor</button>
        </div>
    </div>
    <div class="row my-5">
        @foreach($proveedores as $proveedor)
        <div class="col-12 col-sm-3 my-2">
            <div class="card mx-auto" style="width: 18rem;">
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
    <section class="row">
        <div class="col-6 d-flex">
            <h2>Mis Facturas</h2>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFactura">+ Agregar factura</button>
        </div>
        <div class="row">
            @foreach($proveedores as $proveedor)
            <div class="col-12">
                <h5>{{ $proveedor->nombre }}</h5>
                <div class="row">
                    @foreach($facturas as $factura)
                    @if($factura->proveedor == $proveedor->nombre)
                    <div class="col-12 col-sm-3 my-3">
                        <div class="text-center p-3 factura shadow">
                            <div class="text-center">
                                <i style="font-size: 50px;" class="bi bi-file-earmark-text"></i>
                            </div>
                            <a href="{{ asset('images/facturas/' . $factura->nombre)}}" target="_blank" rel="noopener noreferrer">{{ $factura->nombre }}</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @include('partials.session-status')
    @include('partials.data-error')
</x-app-layout>