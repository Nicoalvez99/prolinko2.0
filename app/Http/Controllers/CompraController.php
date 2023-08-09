<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tienda', [
            "compras" => Compras::get()
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
    public function store(Request $request)
    {
        //Tomar los valores de los input
        $codigo = $request->codigo;
        $cantidad = $request->cantidad == "" ? 1 : intval($request->cantidad);
        $user = Auth::user();
        //Luego si esos valores coinciden con algún producto que tengas en la BBDD, lo guarda en la table de compras
        $aProductos = Productos::where('user_id', '=', $user->id)->get();
        foreach($aProductos as $producto){
            if($producto->codigo == $codigo || $producto->nombre == $codigo){
                Compras::create([
                    'nombre' => $producto->nombre,
                    'codigo' => $producto->codigo,
                    'cantidad' => $cantidad,
                    'precio' => $producto->precio,
                    'stock' => $producto->stock,
                    'user_id' => $user->id
                ]);
            }
        }
        // Sino manda un mensaje de session que diga "Este producto no está en tu stock".
        return redirect()->route('tienda');
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
    public function destroy(Compras $compra)
    {
        $compra->delete();
        return redirect()->route('tienda');
    }
}
