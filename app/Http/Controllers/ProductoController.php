<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Print_;
use Carbon\Carbon;

class ProductoController extends Controller
{
    public function __invoke()
    {
        //
    }
    public function index()
    {
        return view('stock', [
            "stocks" => Productos::get()
        ]);
    }
    public function store(Productos $productos, Request $request)
    {
        $user = Auth::user();

        $fechaActual = Carbon::now();

    // Obtiene la cantidad de productos creados por el usuario en la semana actual
        $cantidadPorSemana = Productos::where('user_id', $user->id)
        ->whereBetween('created_at', [$fechaActual->startOfWeek(), $fechaActual->endOfWeek()])
        ->count();
        // CAMBIAR EL CONTADOR PORQUE NO ES CADA VEZ QUE SE CREA SINO CADA VEZ QUE ALGUIEN COMPRA EL PRODUCTO POR SEMANA
        Productos::create([
            'nombre' => request('nombre'),
            'codigo' => request('codigo'),
            'precio' => request('precio'),
            'stock' => request('stock'),
            'contador_semanal' => $cantidadPorSemana + 1, //corregir
            'user_id' => $user->id
        ]);
       
        return redirect()->route('stock')->with('status', 'Producto creado exitosamente');
    }

    public function update(Productos $producto, Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|numeric',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);
        
        $producto->update([
            'nombre' => $validatedData['nombre'],
            'codigo' => $validatedData['codigo'],
            'precio' => $validatedData['precio'],
            'stock' => $validatedData['stock']
        ]);
        return redirect()->route('stock')->with('status', 'Producto actualizado correctamente');
    }

    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('stock')->with('status', 'Producto eliminado correctamente');
    }
    
}
