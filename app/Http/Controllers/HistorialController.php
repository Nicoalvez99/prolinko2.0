<?php

namespace App\Http\Controllers;
use App\Models\Historial;
use App\Models\Productos;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function __invoke()
    {
        //
    }
    public function index()
    {
        $user = Auth::user();
        $totalProductos = count(Productos::where('user_id', '=', $user->id)->get());
        $totalProveedores = count(Proveedores::where('user_id', '=', $user->id)->get());
        $totalHistorial = Historial::where('user_id', '=', $user->id)->sum('total');
        // Del Historial quiero almacenar la informacion de la cantidad de ventas por día de la semana
        $ventasPorDia = Historial::where('user_id', '=', $user->id)
        ->selectRaw('DAYOFWEEK(created_at) as dia_semana, COUNT(*) as cantidad_ventas')
        ->groupBy('dia_semana')
        ->orderBy('dia_semana')
        ->get();
        return view('dashboard', [
            "historials" => Historial::where('user_id', '=', $user->id)
            ->orderByDesc('created_at')
            ->get(),
            "totalProductos" => $totalProductos,
            "totalProveedores" => $totalProveedores,
            "totalHistorial" => $totalHistorial,
            "ventasPorDia" => $ventasPorDia
        ]);
    }
}
