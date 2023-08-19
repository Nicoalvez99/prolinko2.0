<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Proveedores;
use App\Models\Facturas;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proveedores', [
            "proveedores" => Proveedores::get(),
            "facturas" => Facturas::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $tipo)
    {
        if ($tipo == 'proveedor') {
            Proveedores::create([
                'nombre' => request('nombre'),
                'email' => request('email'),
                'telefono' => request('telefono'),
                'direccion' => request('direccion'),
                'descripcion' => request('descripcion'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('proveedores')->with('status', 'Proveedor agregado correctamente.');
        } elseif ($tipo == 'factura') {
            $userId = Auth::user()->id;
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $destinationPath = 'images/facturas/';
                $fileName = time() . "-" . $file->getClientOriginalName();
                $request->file('imagen')->move($destinationPath, $fileName);
                $nameFinal = $fileName;
            }

            Facturas::create([
                'nombre' => $nameFinal,
                'proveedor' => request('proveedor'),
                'user_id' => $userId
            ]);
            return redirect()->route('proveedores')->with('status', 'Factura guardada correctamente.');
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
