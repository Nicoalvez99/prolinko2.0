<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Productos;
use App\Models\Historials;
use App\Models\Historialmes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('tienda', [
            "compras" => Compras::where('user_id', '=', $user->id)->get()
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
    public function print()
    {
    }
    public function store(Request $request, $tipo)
    {
        if ($tipo == 'compra') {
            //Tomar los valores de los input
            $codigo = $request->codigo;
            if(Auth::user()->tipoDeTienda == 'Kilogramos'){
                $cantidad = $request->cantidad == "" ? 1 : floatval($request->cantidad);
                
            } else {
                $cantidad = $request->cantidad == "" ? 1 : intval($request->cantidad);
            }
            
            $user = Auth::user();
            //Luego si esos valores coinciden con algún producto que tengas en la BBDD, lo guarda en la table de compras
            $aProductos = Productos::where('user_id', '=', $user->id)->get();
            $productoNoEncontrado = 0;
            foreach ($aProductos as $producto) {
                if ($producto->codigo == $codigo || $producto->nombre == $codigo) {
                    //Si el usuario tiene Kilogramos por tipo de tienda agregamos la cantidad decimal a cantidadKg
                    if($user->tipoDeTienda == 'Kilogramos'){
                        Compras::create([
                            'nombre' => $producto->nombre,
                            'codigo' => $producto->codigo,
                            'cantidad' => null,
                            'cantidadKg' => $cantidad,
                            'precio' => $producto->precio,
                            'precioTotal' => $producto->precio * $cantidad,
                            'stock' => $producto->stock,
                            'rubro' => $producto->rubro,
                            'user_id' => $user->id
                        ]);
                    } else {
                        //sino a cantidad solo
                        Compras::create([
                            'nombre' => $producto->nombre,
                            'codigo' => $producto->codigo,
                            'cantidad' => $cantidad,
                            'cantidadKg' => null,
                            'precio' => $producto->precio,
                            'precioTotal' => $producto->precio * $cantidad,
                            'stock' => $producto->stock,
                            'rubro' => $producto->rubro,
                            'user_id' => $user->id
                        ]);
                    }
                    $productoNoEncontrado - 1;
                } else {
                    $productoNoEncontrado++;
                }
            }
            $totalProductos = count($aProductos);
            if ($productoNoEncontrado == $totalProductos) {
                return redirect()->route('tienda')->with('status', 'Este producto no está en su stock.');
            } else {
                return redirect()->route('tienda');
            }
        } elseif ($tipo == 'print'){

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
    public function destroy(Compras $compra)
    {
        $compra->delete();
        return redirect()->route('tienda');
    }
    public function cobrarDestroy(Productos $producto, Compras $compra, Historials $historial)
    {
        $userId = auth()->user()->id;

        // Obtener las compras del usuario actual
        $comprasUsuario = Compras::where('user_id', $userId)->get();

        //Agregar al historial la compra
        $aProductos = [];
        $aRubros = [];
        $totalCompra = 0;
        foreach ($comprasUsuario as $compra) {
            $aProductos[] = $compra->cantidad > 1 ? $compra->nombre . "(" . $compra->cantidad . ")" : $compra->nombre;
            $aRubros[] = $compra->rubro;
            $totalCompra += $compra->precioTotal;
        }
        $cadenaProductos = implode(', ', $aProductos);
        $cadenaRubros = implode(', ', $aRubros);

        Historials::create([
            "aProductos" => $cadenaProductos,
            "total" => $totalCompra,
            "aRubros" => $cadenaRubros,
            "user_id" => $userId

        ]);
        Historialmes::create([
            "aProductos" => $cadenaProductos,
            "total" => $totalCompra,
            "aRubros" => $cadenaRubros,
            "user_id" => $userId
        ]);

        // Procesar las compras y actualizar los productos
        foreach ($comprasUsuario as $compra) {
            $codigoProducto = $compra->codigo;
            $cantidadCompra = $compra->cantidad;

            // Buscar el producto correspondiente por su código
            $producto = Productos::where('codigo', $codigoProducto)->first();

            if ($producto) {
                // Restar la cantidad de la compra al stock del producto
                $producto->decrement('stock', $cantidadCompra);
            }
        }
        Compras::where('user_id', $userId)->delete();

        return redirect()->route('tienda');
    }
}
