<?php

namespace App\Http\Controllers;

use App\Models\Historialmes;
use App\Models\Contadors;
use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contadors $contador)
    {
        $user = Auth::user();
        $clientes = Contadors::where('id_contador', '=', $user->id)->get();
        $cantidadDeClientes = Contadors::where('id_contador', '=', $user->id)->count();
        // Una variable que use User::where() y dentro busque lo que sea igual de $clientes->clientes y de $user->id_random
        $datosUsuarios = [];

        if ($cantidadDeClientes > 0) {
            // Obtén la lista de IDs de clientes
            $clientesIds = $clientes->pluck('clientes')->all();
            
            // Realiza una consulta para obtener los usuarios que coincidan con los IDs de clientes y user_id
            $datosUsuarios = User::whereIn('id_random', $clientesIds) ->get();
        }
        
        if ($cantidadDeClientes > 0) {
            return view('contadoresDos', [
                "nombre" => $user->name,
                "email" => $user->email,
                "clientes" => $clientes,
                "datos" => $datosUsuarios,
                "cantidades" => $cantidadDeClientes

            ]);
        } else {
            return view('contador');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        Contadors::create([
            "clientes" => $user->id_random,
            "id_contador" => $request->id_contador
        ]);
        Notifications::where('id_cliente', '=', $user->id_random)->delete();
        return redirect()->route('tienda')->with('status', 'Permisos validados');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        Notifications::create([
            "id_contador" => $user->id,
            "nombre" => $user->name,
            "email" => $user->email,
            "id_cliente" => request('id_cliente')
        ]);
        return redirect()->route('contador')->with('status', 'Solicitud enviada correctamente');
    }
    public function clientes(){
        $user = Auth::user();
        $clientes = Contadors::where('id_contador', '=', $user->id)->get();
        $clientesIds = $clientes->pluck('clientes')->all();
            
            // Realiza una consulta para obtener los usuarios que coincidan con los IDs de clientes y user_id
        $datosUsuarios = User::whereIn('id_random', $clientesIds) ->get();
        return view('clientes', [
            "clientes" => $datosUsuarios
        ]);
    }
    public function obtenerCliente($cliente){
        $datosDelCliente = User::where('id', '=', $cliente)->get();
        //dd($datosDelCliente);
        $nombre = $datosDelCliente[0]['name'];
        $dni = $datosDelCliente[0]['dni'];

        $ventasPorMes = Historialmes::where('user_id', '=', $cliente)
            ->whereYear('created_at', now()->year) // Filtrar por el año actual
            ->selectRaw('MONTH(created_at) as mes, COUNT(*) as cantidad_ventas')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        // Crear un arreglo asociativo para almacenar las ventas por mes
        $ventasPorMeses = [];
        foreach ($ventasPorMes as $venta) {
            // Obtener el nombre del mes
            $nombreMes = date('F', mktime(0, 0, 0, $venta->mes, 1));

            // Almacenar en el arreglo asociativo
            $ventasPorMeses[$nombreMes] = $venta->cantidad_ventas;
        }

        return view('contador.cliente', [
            "nombre" => $nombre,
            "dni" => $dni,
            "ventasPorMeses" => $ventasPorMeses
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Contadors $contador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contadors $contador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contadors $contador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contadors $contador)
    {
        //
    }
}
